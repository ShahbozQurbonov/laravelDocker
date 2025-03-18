# PHP 8.1 FPM bilan konteyner yaratamiz
FROM php:8.1-fpm

# Ishchi papkani o'rnatamiz
WORKDIR /var/www/html

# Composer va kerakli kutubxonalarni o'rnatamiz
RUN apt-get update && apt-get install -y \
    zip unzip git curl libpng-dev libonig-dev libxml2-dev \
    && docker-php-ext-install pdo_mysql mbstring exif pcntl bcmath gd

# Composerni o'rnatamiz
COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

# Laravel loyihasini tayyorlash uchun ruxsatlarni beramiz
RUN chown -R www-data:www-data /var/www/html \
    && chmod -R 755 /var/www/html

CMD ["php-fpm"]
