<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Pembayaran;

class PembayaranSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $pembayarans = [
            [
                'metode_pembayaran' => 'Transfer',
                'jumlah_bayar' => 100000.00,
                'tanggal_bayar' => '2025-06-29',
                'created_at' => '2025-06-29 16:50:22',
                'updated_at' => '2025-06-29 16:50:22',
            ],
            [
                'metode_pembayaran' => 'QRIS',
                'jumlah_bayar' => 350000.00,
                'tanggal_bayar' => '2025-06-30',
                'created_at' => '2025-06-30 04:00:17',
                'updated_at' => '2025-06-30 04:00:17',
            ],
            [
                'metode_pembayaran' => 'QRIS',
                'jumlah_bayar' => 350000.00,
                'tanggal_bayar' => '2025-06-30',
                'created_at' => '2025-06-30 04:00:17',
                'updated_at' => '2025-06-30 04:00:17',
            ],
            [
                'metode_pembayaran' => 'COD',
                'jumlah_bayar' => 200000.00,
                'tanggal_bayar' => '2025-06-30',
                'created_at' => '2025-06-30 04:39:32',
                'updated_at' => '2025-06-30 04:39:32',
            ],
            [
                'metode_pembayaran' => 'COD',
                'jumlah_bayar' => 100000.00,
                'tanggal_bayar' => '2025-06-30',
                'created_at' => '2025-06-30 04:47:31',
                'updated_at' => '2025-06-30 04:47:31',
            ],
            [
                'metode_pembayaran' => 'Transfer',
                'jumlah_bayar' => 350000.00,
                'tanggal_bayar' => '2025-07-01',
                'created_at' => '2025-07-01 05:21:56',
                'updated_at' => '2025-07-01 05:21:56',
            ],
            [
                'metode_pembayaran' => 'COD',
                'jumlah_bayar' => 350000.00,
                'tanggal_bayar' => '2025-07-01',
                'created_at' => '2025-07-01 05:22:20',
                'updated_at' => '2025-07-01 05:22:20',
            ],
            [
                'metode_pembayaran' => 'COD',
                'jumlah_bayar' => 100000.00,
                'tanggal_bayar' => '2025-07-01',
                'created_at' => '2025-07-01 05:31:02',
                'updated_at' => '2025-07-01 05:31:02',
            ],
            [
                'metode_pembayaran' => 'QRIS',
                'jumlah_bayar' => 600000.00,
                'tanggal_bayar' => '2025-07-01',
                'created_at' => '2025-07-01 05:39:45',
                'updated_at' => '2025-07-01 05:39:45',
            ],
            [
                'metode_pembayaran' => 'Transfer',
                'jumlah_bayar' => 400000.00,
                'tanggal_bayar' => '2025-07-01',
                'created_at' => '2025-07-01 05:41:08',
                'updated_at' => '2025-07-01 05:41:08',
            ],
            [
                'metode_pembayaran' => 'QRIS',
                'jumlah_bayar' => 300000.00,
                'tanggal_bayar' => '2025-07-01',
                'created_at' => '2025-07-01 11:11:44',
                'updated_at' => '2025-07-01 11:11:44',
            ],
            [
                'metode_pembayaran' => 'COD',
                'jumlah_bayar' => 250000.00,
                'tanggal_bayar' => '2025-07-01',
                'created_at' => '2025-07-01 11:28:47',
                'updated_at' => '2025-07-01 11:28:47',
            ],
            [
                'metode_pembayaran' => 'COD',
                'jumlah_bayar' => 400000.00,
                'tanggal_bayar' => '2025-07-01',
                'created_at' => '2025-07-01 12:06:53',
                'updated_at' => '2025-07-01 12:06:53',
            ],
            [
                'metode_pembayaran' => 'Transfer',
                'jumlah_bayar' => 200000.00,
                'tanggal_bayar' => '2025-07-03',
                'created_at' => '2025-07-03 11:42:16',
                'updated_at' => '2025-07-03 11:42:16',
            ],
            [
                'metode_pembayaran' => 'COD',
                'jumlah_bayar' => 700000.00,
                'tanggal_bayar' => '2025-07-04',
                'created_at' => '2025-07-04 05:49:37',
                'updated_at' => '2025-07-04 05:49:37',
            ],
            [
                'metode_pembayaran' => 'COD',
                'jumlah_bayar' => 600000.00,
                'tanggal_bayar' => '2025-07-04',
                'created_at' => '2025-07-04 06:06:08',
                'updated_at' => '2025-07-04 06:06:08',
            ],
        ];

        foreach ($pembayarans as $pembayaran) {
            Pembayaran::create($pembayaran);
        }
    }
} 