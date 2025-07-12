<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Pesanan;

class PesananSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $pesanans = [
            [
                'pelanggan_id' => 1,
                'produk_id' => 1,
                'jumlah' => 1,
                'total_harga' => 100000,
                'created_at' => '2025-07-01 04:19:05',
                'updated_at' => '2025-07-01 04:19:05',
                'pembayaran_id' => null,
            ],
            [
                'pelanggan_id' => 1,
                'produk_id' => 2,
                'jumlah' => 1,
                'total_harga' => 200000,
                'created_at' => '2025-07-01 04:19:05',
                'updated_at' => '2025-07-01 04:19:05',
                'pembayaran_id' => null,
            ],
            [
                'pelanggan_id' => 1,
                'produk_id' => 3,
                'jumlah' => 1,
                'total_harga' => 150000,
                'created_at' => '2025-07-01 04:19:05',
                'updated_at' => '2025-07-01 04:19:05',
                'pembayaran_id' => null,
            ],
            [
                'pelanggan_id' => 1,
                'produk_id' => 1,
                'jumlah' => 1,
                'total_harga' => 100000,
                'created_at' => '2025-07-01 04:23:45',
                'updated_at' => '2025-07-01 04:23:45',
                'pembayaran_id' => null,
            ],
            [
                'pelanggan_id' => 1,
                'produk_id' => 2,
                'jumlah' => 1,
                'total_harga' => 200000,
                'created_at' => '2025-07-01 04:23:45',
                'updated_at' => '2025-07-01 04:23:45',
                'pembayaran_id' => null,
            ],
            [
                'pelanggan_id' => 1,
                'produk_id' => 3,
                'jumlah' => 1,
                'total_harga' => 150000,
                'created_at' => '2025-07-01 04:23:45',
                'updated_at' => '2025-07-01 04:23:45',
                'pembayaran_id' => null,
            ],
            [
                'pelanggan_id' => 2,
                'produk_id' => 2,
                'jumlah' => 1,
                'total_harga' => 200000,
                'created_at' => '2025-07-01 04:34:12',
                'updated_at' => '2025-07-01 04:34:12',
                'pembayaran_id' => null,
            ],
            [
                'pelanggan_id' => 3,
                'produk_id' => 2,
                'jumlah' => 1,
                'total_harga' => 200000,
                'created_at' => '2025-07-01 04:43:41',
                'updated_at' => '2025-07-01 04:43:41',
                'pembayaran_id' => null,
            ],
            [
                'pelanggan_id' => 3,
                'produk_id' => 3,
                'jumlah' => 1,
                'total_harga' => 150000,
                'created_at' => '2025-07-01 04:43:41',
                'updated_at' => '2025-07-01 04:43:41',
                'pembayaran_id' => null,
            ],
            [
                'pelanggan_id' => 4,
                'produk_id' => 2,
                'jumlah' => 1,
                'total_harga' => 200000,
                'created_at' => '2025-07-01 05:21:46',
                'updated_at' => '2025-07-01 05:21:46',
                'pembayaran_id' => null,
            ],
            [
                'pelanggan_id' => 4,
                'produk_id' => 3,
                'jumlah' => 1,
                'total_harga' => 150000,
                'created_at' => '2025-07-01 05:21:46',
                'updated_at' => '2025-07-01 05:21:46',
                'pembayaran_id' => null,
            ],
            [
                'pelanggan_id' => 5,
                'produk_id' => 1,
                'jumlah' => 1,
                'total_harga' => 100000,
                'created_at' => '2025-07-01 05:30:55',
                'updated_at' => '2025-07-01 05:31:02',
                'pembayaran_id' => 8,
            ],
            [
                'pelanggan_id' => 5,
                'produk_id' => 1,
                'jumlah' => 2,
                'total_harga' => 200000,
                'created_at' => '2025-07-01 05:39:39',
                'updated_at' => '2025-07-01 05:39:45',
                'pembayaran_id' => 9,
            ],
            [
                'pelanggan_id' => 5,
                'produk_id' => 2,
                'jumlah' => 2,
                'total_harga' => 400000,
                'created_at' => '2025-07-01 05:39:39',
                'updated_at' => '2025-07-01 05:39:45',
                'pembayaran_id' => 9,
            ],
            [
                'pelanggan_id' => 6,
                'produk_id' => 2,
                'jumlah' => 2,
                'total_harga' => 400000,
                'created_at' => '2025-07-01 05:41:03',
                'updated_at' => '2025-07-01 05:41:08',
                'pembayaran_id' => 10,
            ],
            [
                'pelanggan_id' => 7,
                'produk_id' => 1,
                'jumlah' => 1,
                'total_harga' => 100000,
                'created_at' => '2025-07-01 11:11:28',
                'updated_at' => '2025-07-01 11:11:44',
                'pembayaran_id' => 11,
            ],
            [
                'pelanggan_id' => 7,
                'produk_id' => 2,
                'jumlah' => 1,
                'total_harga' => 200000,
                'created_at' => '2025-07-01 11:11:28',
                'updated_at' => '2025-07-01 11:11:44',
                'pembayaran_id' => 11,
            ],
            [
                'pelanggan_id' => 8,
                'produk_id' => 1,
                'jumlah' => 1,
                'total_harga' => 100000,
                'created_at' => '2025-07-01 11:28:40',
                'updated_at' => '2025-07-01 11:28:47',
                'pembayaran_id' => 12,
            ],
            [
                'pelanggan_id' => 8,
                'produk_id' => 3,
                'jumlah' => 1,
                'total_harga' => 150000,
                'created_at' => '2025-07-01 11:28:40',
                'updated_at' => '2025-07-01 11:28:47',
                'pembayaran_id' => 12,
            ],
            [
                'pelanggan_id' => 9,
                'produk_id' => 2,
                'jumlah' => 2,
                'total_harga' => 400000,
                'created_at' => '2025-07-01 12:06:43',
                'updated_at' => '2025-07-01 12:06:53',
                'pembayaran_id' => 13,
            ],
            [
                'pelanggan_id' => 11,
                'produk_id' => 2,
                'jumlah' => 1,
                'total_harga' => 200000,
                'created_at' => '2025-07-03 11:42:07',
                'updated_at' => '2025-07-03 11:42:16',
                'pembayaran_id' => 14,
            ],
            [
                'pelanggan_id' => 12,
                'produk_id' => 2,
                'jumlah' => 2,
                'total_harga' => 400000,
                'created_at' => '2025-07-04 05:49:31',
                'updated_at' => '2025-07-04 05:49:37',
                'pembayaran_id' => 15,
            ],
            [
                'pelanggan_id' => 12,
                'produk_id' => 3,
                'jumlah' => 2,
                'total_harga' => 300000,
                'created_at' => '2025-07-04 05:49:31',
                'updated_at' => '2025-07-04 05:49:37',
                'pembayaran_id' => 15,
            ],
            [
                'pelanggan_id' => 13,
                'produk_id' => 2,
                'jumlah' => 3,
                'total_harga' => 600000,
                'created_at' => '2025-07-04 06:06:02',
                'updated_at' => '2025-07-04 06:06:08',
                'pembayaran_id' => 16,
            ],
        ];

        foreach ($pesanans as $pesanan) {
            Pesanan::create($pesanan);
        }
    }
} 