#!/bin/sh

# Jalankan migrate dan seeder (jika gagal, lanjutkan)
php artisan migrate --seed --force || true

# Tampilkan isi log laravel ke console (jika ada)
if [ -f storage/logs/laravel.log ]; then
  echo "=== ISI LARAVEL LOG ==="
  cat storage/logs/laravel.log
  echo "=== END LARAVEL LOG ==="
fi

# Start supervisor (php-fpm + nginx)
/usr/bin/supervisord -c /etc/supervisord.conf 