FROM php:8.3-cli

# تثبيت الحزم المطلوبة
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
        pcntl \
    && apt-get clean \
    && rm -rf /var/lib/apt/lists/*

# تثبيت Composer
COPY --from=composer:2 /usr/bin/composer /usr/bin/composer

# السماح بتشغيل Composer كـ root
ENV COMPOSER_ALLOW_SUPERUSER=1

WORKDIR /var/www

# انسخ المشروع بالكامل أولاً
COPY . .

# تثبيت الاعتماديات
RUN composer install \
    --no-dev \
    --optimize-autoloader \
    --no-interaction

# إنشاء مجلدات Laravel المطلوبة
RUN mkdir -p \
    storage/framework/cache \
    storage/framework/sessions \
    storage/framework/views \
    bootstrap/cache

# الصلاحيات
RUN chmod -R 775 storage bootstrap/cache

# إنشاء APP_KEY إذا لم يكن موجودًا
RUN php artisan key:generate --force || true

# تحسين الأداء
RUN php artisan config:cache || true
RUN php artisan route:cache || true
RUN php artisan view:cache || true

EXPOSE 8080

CMD php artisan migrate --force && \
    php artisan storage:link || true && \
    php artisan serve --host=0.0.0.0 --port=${PORT:-8080}
