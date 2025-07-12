# Panduan Deployment Laravel di Railway

## File Konfigurasi yang Sudah Dibuat

1. **railway.json** - Konfigurasi Railway deployment
2. **nixpacks.toml** - Konfigurasi build process dengan Nixpacks
3. **Procfile** - Alternatif untuk menjalankan aplikasi

## Langkah-langkah Deployment

### 1. Persiapkan Repository

```bash
# Pastikan semua file sudah di-commit
git add .
git commit -m "Add Railway configuration"
git push origin main
```

### 2. Setup Railway

1. Buka [Railway.app](https://railway.app)
2. Login dengan GitHub/GitLab
3. Klik "New Project"
4. Pilih "Deploy from GitHub repo"
5. Pilih repository Anda

### 3. Konfigurasi Environment Variables

Setelah project dibuat, tambahkan environment variables berikut:

#### Database Variables (jika menggunakan Railway MySQL):

```
DB_CONNECTION=mysql
DB_HOST=${MYSQL_HOST}
DB_PORT=${MYSQL_PORT}
DB_DATABASE=${MYSQL_DATABASE}
DB_USERNAME=${MYSQL_USER}
DB_PASSWORD=${MYSQL_PASSWORD}
```

#### Atau jika menggunakan database eksternal:

```
DB_CONNECTION=mysql
DB_HOST=your-database-host
DB_PORT=3306
DB_DATABASE=cozy_by_tiway
DB_USERNAME=your-username
DB_PASSWORD=your-password
```

#### App Variables:

```
APP_NAME="Cozy By Tiway"
APP_ENV=production
APP_DEBUG=false
APP_URL=https://your-app-name.railway.app
APP_KEY=base64:your-app-key-here
```

### 4. Generate App Key

```bash
# Jalankan di local untuk generate key
php artisan key:generate --show
# Copy hasilnya ke APP_KEY di Railway
```

### 5. Setup Database

1. Tambahkan MySQL service di Railway (jika belum ada)
2. Railway akan otomatis set environment variables untuk database
3. Jalankan migration:
    ```bash
    php artisan migrate --force
    ```

### 6. Setup Storage

Railway akan otomatis menjalankan:

-   `composer install`
-   `npm install`
-   `npm run build`
-   `php artisan storage:link`
-   Membuat folder storage dengan permission yang benar

## Fitur yang Akan Aktif

✅ **Composer** - Install PHP dependencies  
✅ **NPM** - Install Node.js dependencies  
✅ **NPM Build** - Build assets dengan Vite  
✅ **Storage** - Folder storage dengan permission yang benar + storage link  
✅ **PHP Artisan** - Semua command Laravel  
✅ **Database** - MySQL dengan migration dan seeder  
✅ **Environment Variables** - Konfigurasi yang fleksibel

## Troubleshooting

### Jika build gagal:

1. Cek logs di Railway dashboard
2. Pastikan semua dependencies ada di composer.json dan package.json
3. Cek environment variables sudah benar

### Jika database error:

1. Pastikan database service sudah running
2. Cek connection string di environment variables
3. Jalankan `php artisan migrate --force`

### Jika storage error:

1. Railway akan otomatis membuat folder storage
2. Permission sudah di-set otomatis
3. Jika masih error, cek logs untuk detail

## Monitoring

-   **Logs**: Lihat di Railway dashboard
-   **Metrics**: CPU, Memory, Network usage
-   **Deployments**: History deployment dan rollback

## Custom Domain (Opsional)

1. Di Railway dashboard, klik project
2. Pilih "Settings" > "Domains"
3. Tambahkan custom domain
4. Update APP_URL di environment variables

## Backup Database

Railway menyediakan backup otomatis untuk MySQL service:

1. Klik MySQL service di dashboard
2. Pilih "Backups"
3. Download atau restore backup

---

**Setelah deployment selesai, aplikasi akan berjalan di:**
`https://your-app-name.railway.app`

Semua fitur Laravel akan aktif termasuk storage, database, dan asset compilation!
