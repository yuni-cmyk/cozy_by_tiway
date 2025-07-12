#!/bin/sh

# Jalankan migrate dan seeder (jika gagal, lanjutkan)
php artisan migrate --seed --force || true

# Start supervisor (php-fpm + nginx)
/usr/bin/supervisord -c /etc/supervisord.conf 