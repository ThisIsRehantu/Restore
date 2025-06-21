# Gunakan image PHP dengan Apache
FROM php:8.1-apache

# Install ekstensi dan alat yang dibutuhkan Laravel
RUN apt-get update && apt-get install -y \
    libfreetype6-dev libjpeg62-turbo-dev libpng-dev libzip-dev zip unzip curl git \
    default-mysql-client \
    && docker-php-ext-configure gd --with-freetype --with-jpeg \
    && docker-php-ext-install gd pdo pdo_mysql

# Aktifkan mod_rewrite Apache
RUN a2enmod rewrite

# Set folder kerja ke Laravel
WORKDIR /var/www/html

# Salin semua file Laravel ke container
COPY . /var/www/html

# Salin file .env (jika perlu)
COPY .env /var/www/html/.env

# Salin konfigurasi Apache
COPY apache.conf /etc/apache2/sites-available/000-default.conf

# Install Composer
COPY --from=composer:latest /usr/bin/composer /usr/bin/composer
    
# Jalankan perintah Laravel
RUN composer install --no-interaction --prefer-dist --optimize-autoloader && \
    php artisan config:clear && \
    php artisan route:clear && \
    php artisan view:clear && \
    php artisan cache:clear && \
    php artisan config:cache && \
    php artisan storage:link

# Set permission
RUN chown -R www-data:www-data /var/www/html && \
    chmod -R 775 /var/www/html/storage /var/www/html/bootstrap/cache
