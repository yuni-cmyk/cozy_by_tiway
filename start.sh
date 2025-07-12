#!/bin/sh

# Tunggu MySQL siap (maks 30 detik)
echo "Menunggu database siap..."
for i in {1..30}; do
  php artisan migrate:status --database=mysql && break
  echo "Database belum siap, tunggu 1 detik..."
  sleep 1
done

# Jalankan migrate fresh dan seeder
php artisan migrate:fresh --seed --force || true

# Tampilkan isi log laravel ke console (jika ada)
if [ -f storage/logs/laravel.log ]; then
  echo "=== ISI LARAVEL LOG ==="
  cat storage/logs/laravel.log
  echo "=== END LARAVEL LOG ==="
fi

# Start supervisor (php-fpm + nginx)
/usr/bin/supervisord -c /etc/supervisord.conf 