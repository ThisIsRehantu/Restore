# Gunakan image Apache + PHP
FROM php:8.1-apache

# Install dependensi PHP tambahan
RUN docker-php-ext-install pdo pdo_mysql

# Aktifkan mod_rewrite
RUN a2enmod rewrite

# Salin semua file project
COPY ./becraft /var/www/html/

# Set working dir
WORKDIR /var/www/html/

# Salin konfigurasi Apache
COPY ./apache.conf /etc/apache2/sites-enabled/000-default.conf

# Install Composer
COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

# Jalankan Composer
RUN composer install --no-dev --optimize-autoloader &&     php artisan config:cache &&     php artisan route:cache &&     php artisan view:cache

# Set permission
RUN chown -R www-data:www-data /var/www/html     && chmod -R 755 /var/www/html/storage
