# PHP 8.2 bilan konteyner yaratish
FROM php:8.2-fpm

# Ish katalogini o‘rnatish
WORKDIR /var/www/html

# Zarur paketlarni o‘rnatish
RUN apt-get update && apt-get install -y \
    git \
    unzip \
    libpng-dev \
    libonig-dev \
    libxml2-dev \
    zip \
    curl

# PHP kengaytmalarini o‘rnatish
RUN docker-php-ext-install pdo_mysql mbstring exif pcntl bcmath gd

# Composer’ni yuklash
COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

# Loyiha fayllarini konteyner ichiga ko‘chirish
COPY . .

# Git uchun xavfsiz papka sifatida belgilash 🔥
RUN git config --global --add safe.directory /var/www/html

# Ruxsat berish
RUN chown -R www-data:www-data /var/www/html

# 🚀 Laravel sozlamalarini avtomatik bajarish
RUN composer install && \
    cp .env.example .env && \
    php artisan key:generate && \
    php artisan migrate --force && \
    php artisan config:clear && \
    php artisan route:clear && \
    php artisan view:clear

# PHP-FPM ishga tushirish
CMD ["php-fpm"]
