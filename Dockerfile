FROM php:8.1-apache

# Install ekstensi
RUN apt-get update && apt-get install -y \
    libfreetype6-dev libjpeg62-turbo-dev libpng-dev \
    zip unzip curl git \
    && docker-php-ext-configure gd --with-freetype --with-jpeg \
    && docker-php-ext-install gd pdo pdo_mysql

# Enable mod_rewrite
RUN a2enmod rewrite

# Set folder kerja
WORKDIR /var/www/html

# Copy project
COPY ./becraft /var/www/html

# Copy config apache
COPY apache.conf /etc/apache2/sites-enabled/000-default.conf

# Composer
COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

# Build Laravel
RUN composer install --no-dev --optimize-autoloader && \
    php artisan config:cache && \
    php artisan route:cache && \
    php artisan view:cache
