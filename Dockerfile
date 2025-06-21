FROM php:8.1-apache

# Install ekstensi PHP dan alat bantu
RUN apt-get update && apt-get install -y \
    libfreetype6-dev libjpeg62-turbo-dev libpng-dev \
    zip unzip curl git \
    && docker-php-ext-configure gd --with-freetype --with-jpeg \
    && docker-php-ext-install gd pdo pdo_mysql

# Aktifkan mod_rewrite
RUN a2enmod rewrite

# Set working directory
WORKDIR /var/www/html

# Salin project Laravel ke subfolder becraft
COPY ./becraft /var/www/html/becraft

# Salin file .env ke tempat yang benar
COPY ./becraft/.env /var/www/html/becraft/.env

# Salin Apache config
COPY apache.conf /etc/apache2/sites-enabled/000-default.conf

# Salin composer
COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

# (opsional) Composer install — boleh kamu skip dan pakai CMD
# RUN composer install --no-dev --optimize-autoloader
