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
# Node.js
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
# Install PHP dependencies
# =========================
RUN composer install --no-dev --optimize-autoloader --no-interaction

# =========================
# Install JS + Build
# =========================
RUN npm install
RUN npm run build

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
# IMPORTANT: fix Laravel production cache + Vite
# =========================
RUN php artisan optimize:clear
RUN php artisan config:cache
RUN php artisan route:cache
RUN php artisan view:cache

# =========================
# Port
# =========================
EXPOSE 8080

# =========================
# Runtime
# =========================
CMD sh -c "\
php artisan migrate --force && \
php artisan optimize:clear && \
php artisan config:cache && \
php artisan route:cache && \
php artisan view:cache && \
php artisan serve --host=0.0.0.0 --port=\${PORT:-8080}"
