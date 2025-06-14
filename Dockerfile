FROM php:8.1-apache

RUN apt-get update && apt-get install -y \ 
    libfreetype6-dev libjpeg62-turbo-dev libpng-dev \ 
    zip unzip curl git     && docker-php-ext-configure gd --with-freetype --with-jpeg     && docker-php-ext-install gd pdo pdo_mysql

RUN a2enmod rewrite

WORKDIR /var/www/html

COPY ./becraft /var/www/html/
COPY apache.conf /etc/apache2/sites-enabled/000-default.conf
COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

RUN composer install --no-dev --optimize-autoloader

RUN php artisan config:cache &&     php artisan route:cache &&     php artisan view:cache

RUN chown -R www-data:www-data storage bootstrap/cache &&     chmod -R 775 storage bootstrap/cache