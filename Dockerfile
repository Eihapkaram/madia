FROM php:8.3-cli

# تثبيت الباكدجات المطلوبة
RUN apt-get update && apt-get install -y \
    git \
    unzip \
    zip \
    curl \
    libzip-dev \
    libpng-dev \
    libjpeg62-turbo-dev \
    libfreetype6-dev \
    libonig-dev \
    libxml2-dev \
    libicu-dev \
    libpq-dev \
    libsqlite3-dev \
    sqlite3 \
    && docker-php-ext-configure gd --with-freetype --with-jpeg \
    && docker-php-ext-install \
        pdo \
        pdo_mysql \
        pdo_pgsql \
        pdo_sqlite \
        mbstring \
        zip \
        exif \
        intl \
        gd \
        bcmath \
        pcntl

# تثبيت Composer
COPY --from=composer:2 /usr/bin/composer /usr/bin/composer

WORKDIR /var/www

# نسخ ملفات Composer
COPY composer.json composer.lock ./

# تثبيت Dependencies
RUN composer install \
    --no-dev \
    --optimize-autoloader \
    --no-interaction

# نسخ المشروع
COPY . .

# صلاحيات
RUN mkdir -p storage/framework/{cache,sessions,views} bootstrap/cache && \
    chmod -R 775 storage bootstrap/cache

# إنشاء APP_KEY لو مش موجود
RUN php artisan key:generate --force || true

# تحسين الأداء
RUN php artisan config:cache || true && \
    php artisan route:cache || true && \
    php artisan view:cache || true

EXPOSE $PORT

CMD php artisan migrate --force && \
    php artisan storage:link || true && \
    php artisan serve --host=0.0.0.0 --port=${PORT:-8080}