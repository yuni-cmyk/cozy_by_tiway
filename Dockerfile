# Gunakan image PHP dengan ekstensi yang dibutuhkan
FROM php:8.2-fpm-alpine as base

# Install dependencies system
RUN apk add --no-cache nginx supervisor curl git bash libpng-dev libjpeg-turbo-dev libwebp-dev libxpm-dev freetype-dev oniguruma-dev icu-dev libxml2-dev zip unzip

# Install ekstensi PHP yang dibutuhkan Laravel
RUN docker-php-ext-configure gd --with-freetype --with-jpeg --with-webp --with-xpm \
    && docker-php-ext-install pdo pdo_mysql mbstring exif pcntl bcmath gd intl xml

# Install Composer
COPY --from=composer:2.6 /usr/bin/composer /usr/bin/composer

# Set workdir
WORKDIR /var/www

# Copy source code
COPY . .

# Install dependencies PHP
RUN composer install --no-interaction --prefer-dist --optimize-autoloader

# Install dependencies Node.js dan build assets
RUN apk add --no-cache nodejs npm && npm install && npm run build

# Set permission storage dan bootstrap/cache
RUN mkdir -p storage/framework/cache storage/framework/sessions storage/framework/testing storage/framework/views \
    && chmod -R 777 storage bootstrap/cache

# Buat storage link
RUN php artisan storage:link || true

# Jalankan migration otomatis
RUN php artisan migrate --seed --force || true

# Copy konfigurasi nginx
COPY ./nginx.conf /etc/nginx/nginx.conf

# Supervisor config
COPY ./supervisord.conf /etc/supervisord.conf

# Expose port 8080
EXPOSE 8080

# Start supervisor (nginx + php-fpm)
CMD ["/usr/bin/supervisord", "-c", "/etc/supervisord.conf"] 