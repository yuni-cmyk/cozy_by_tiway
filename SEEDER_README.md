# Cara Menggunakan Data Seeder

File seeder ini dibuat untuk menggantikan import SQL file `cozy_by_tiway.sql`. Dengan menggunakan seeder, Anda tidak perlu lagi mengimport file SQL secara manual.

## File Seeder yang Dibuat

1. **UserSeeder.php** - Data untuk tabel `users`
2. **ProdukSeeder.php** - Data untuk tabel `produks`
3. **PelangganSeeder.php** - Data untuk tabel `pelanggans`
4. **PembayaranSeeder.php** - Data untuk tabel `pembayarans`
5. **PesananSeeder.php** - Data untuk tabel `pesanans`
6. **PengirimanSeeder.php** - Data untuk tabel `pengirimen`

## Cara Menjalankan Seeder

### 1. Jalankan Migration Terlebih Dahulu

```bash
php artisan migrate
```

### 2. Jalankan Seeder

```bash
php artisan db:seed
```

Atau jika ingin menjalankan seeder tertentu saja:

```bash
php artisan db:seed --class=UserSeeder
php artisan db:seed --class=ProdukSeeder
php artisan db:seed --class=PelangganSeeder
php artisan db:seed --class=PembayaranSeeder
php artisan db:seed --class=PesananSeeder
php artisan db:seed --class=PengirimanSeeder
```

### 3. Reset Database dan Jalankan Seeder

Jika ingin menghapus semua data dan menjalankan seeder dari awal:

```bash
php artisan migrate:fresh --seed
```

## Data yang Akan Diisi

### Users (3 data)

-   mutia (yourrr05babyyy@gmail.com)
-   brayen (akucakelumer@gmail.com)
-   SICANTIK (damaradama6@gmail.com)

### Produks (3 data)

-   Hoodie (Rp 100.000)
-   Dress (Rp 200.000)
-   turtleneck (Rp 150.000)

### Pelanggans (13 data)

Berbagai pelanggan dengan nama seperti aliza, filzah, rafli, SIAPAKEK, SICANTIK

### Pembayarans (16 data)

Berbagai metode pembayaran: Transfer, QRIS, COD dengan jumlah yang berbeda-beda

### Pesanans (24 data)

Pesanan dari berbagai pelanggan untuk berbagai produk

### Pengirimen (13 data)

Data pengiriman untuk berbagai pesanan

## Keuntungan Menggunakan Seeder

1. **Tidak perlu import SQL manual** - Cukup jalankan command
2. **Konsisten** - Data selalu sama setiap kali dijalankan
3. **Mudah diubah** - Bisa edit file seeder untuk mengubah data
4. **Version Control** - File seeder bisa di-commit ke git
5. **Environment yang sama** - Memastikan semua developer memiliki data yang sama

## Catatan

-   Password default untuk semua user adalah `password`
-   Semua data menggunakan timestamp yang sama dengan SQL dump asli
-   Relasi antar tabel sudah diatur dengan benar sesuai foreign key
