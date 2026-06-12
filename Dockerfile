FROM php:8.3-cli

# =========================
# System dependencies
# =========================
RUN apt-get update && apt-get install -y \
    git unzip zip curl \
    libzip-dev libpng-dev libjpeg62-turbo-dev libfreetype6-dev \
    libonig-dev libxml2-dev libicu-dev libpq-dev \
    && docker-php-ext-configure gd --with-freetype --with-jpeg \
    && docker-php-ext-install \
        pdo pdo_mysql mbstring zip exif intl gd bcmath pcntl \
    && apt-get clean \
    && rm -rf /var/lib/apt/lists/*

# =========================
# Node.js (Vite + Tailwind)
# =========================
RUN curl -fsSL https://deb.nodesource.com/setup_20.x | bash - \
    && apt-get install -y nodejs

# =========================
# Composer
# =========================
COPY --from=composer:2 /usr/bin/composer /usr/bin/composer
ENV COMPOSER_ALLOW_SUPERUSER=1

WORKDIR /var/www

# =========================
# Copy project
# =========================
COPY . .

# =========================
# Install PHP deps
# =========================
RUN composer install --no-dev --optimize-autoloader --no-interaction

# =========================
# Install JS deps + Build assets
# =========================
RUN if [ -f package.json ]; then \
        npm install && \
        npm run build; \
    fi

# =========================
# Laravel folders + permissions
# =========================
RUN mkdir -p \
    storage/framework/cache \
    storage/framework/sessions \
    storage/framework/views \
    bootstrap/cache

RUN chmod -R 775 storage bootstrap/cache

# =========================
# IMPORTANT: No cache in build
# =========================
# (Railway handles env at runtime)

# =========================
# Port
# =========================
EXPOSE 8080

# =========================
# Runtime command
# =========================
CMD sh -c "\
php artisan migrate --force && \
php artisan config:clear && \
php artisan cache:clear && \
php artisan serve --host=0.0.0.0 --port=\${PORT:-8080}"
