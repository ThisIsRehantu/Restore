#!/bin/bash

# Install dependency untuk production
composer install --no-dev --optimize-autoloader

# Generate app key jika belum
php artisan config:clear
php artisan key:generate

# Jalankan Laravel di port yang disediakan Railway
php artisan serve --host=0.0.0.0 --port=$PORT
