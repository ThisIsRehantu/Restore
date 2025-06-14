FROM php:8.1-apache

# Install ekstensi PHP dan alat bantu
RUN apt-get update && apt-get install -y \
    libfreetype6-dev libjpeg62-turbo-dev libpng-dev \
    zip unzip curl git \
    && docker-php-ext-configure gd --with-freetype --with-jpeg \
    && docker-php-ext-install gd pdo pdo_mysql

# Aktifkan Apache mod_rewrite
RUN a2enmod rewrite

# Set direktori kerja Laravel
WORKDIR /var/www/html

# Salin seluruh source code Laravel ke dalam container
COPY ./becraft /var/www/html/.env

# Salin file konfigurasi Apache
COPY apache.conf /etc/apache2/sites-enabled/000-default.conf

# Salin Composer dari image composer terbaru
COPY --from=composer:latest /usr/bin/composer /usr/bin/composer
