FROM php:8.1-apache

# Install PHP extensions and tools
RUN apt-get update && apt-get install -y \
    libfreetype6-dev libjpeg62-turbo-dev libpng-dev \
    zip unzip curl git \
    && docker-php-ext-configure gd --with-freetype --with-jpeg \
    && docker-php-ext-install gd pdo pdo_mysql

# Enable Apache rewrite module
RUN a2enmod rewrite

# Set working directory
WORKDIR /var/www/html

# Copy Laravel project
COPY ./becraft /var/www/html

# Copy .env
COPY ./becraft/.env /var/www/html/.env

# Apache config
COPY apache.conf /etc/apache2/sites-enabled/000-default.conf

# Copy Composer
COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

# Install dependencies & cache config
RUN composer install --no-dev --optimize-autoloader

# Set correct permissions
RUN chown -R www-data:www-data storage bootstrap/cache && \
    chmod -R 775 storage bootstrap/cache
