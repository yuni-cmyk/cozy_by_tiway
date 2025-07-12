<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Pengiriman;

class PengirimanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $pengirimen = [
            [
                'pesanan_id' => 12,
                'alamat_pengiriman' => 'jl mna',
                'tanggal_kirim' => '2025-07-01',
                'status_pengiriman' => 'Diproses',
                'created_at' => '2025-07-01 05:39:49',
                'updated_at' => '2025-07-01 05:39:49',
            ],
            [
                'pesanan_id' => 14,
                'alamat_pengiriman' => 'jl mna',
                'tanggal_kirim' => '2025-07-01',
                'status_pengiriman' => 'Diproses',
                'created_at' => '2025-07-01 05:41:12',
                'updated_at' => '2025-07-01 05:41:12',
            ],
            [
                'pesanan_id' => 14,
                'alamat_pengiriman' => 'jl mna',
                'tanggal_kirim' => '2025-07-01',
                'status_pengiriman' => 'Diproses',
                'created_at' => '2025-07-01 05:41:32',
                'updated_at' => '2025-07-01 05:41:32',
            ],
            [
                'pesanan_id' => 14,
                'alamat_pengiriman' => 'jl mna',
                'tanggal_kirim' => '2025-07-01',
                'status_pengiriman' => 'Diproses',
                'created_at' => '2025-07-01 05:41:47',
                'updated_at' => '2025-07-01 05:41:47',
            ],
            [
                'pesanan_id' => 14,
                'alamat_pengiriman' => 'jl mna',
                'tanggal_kirim' => '2025-07-01',
                'status_pengiriman' => 'Diproses',
                'created_at' => '2025-07-01 05:42:00',
                'updated_at' => '2025-07-01 05:42:00',
            ],
            [
                'pesanan_id' => 15,
                'alamat_pengiriman' => 'jl mna',
                'tanggal_kirim' => '2025-07-01',
                'status_pengiriman' => 'Diproses',
                'created_at' => '2025-07-01 11:11:50',
                'updated_at' => '2025-07-01 11:11:50',
            ],
            [
                'pesanan_id' => 15,
                'alamat_pengiriman' => 'jl mna',
                'tanggal_kirim' => '2025-07-01',
                'status_pengiriman' => 'Diproses',
                'created_at' => '2025-07-01 11:14:19',
                'updated_at' => '2025-07-01 11:14:19',
            ],
            [
                'pesanan_id' => 15,
                'alamat_pengiriman' => 'jl mna',
                'tanggal_kirim' => '2025-07-01',
                'status_pengiriman' => 'Diproses',
                'created_at' => '2025-07-01 11:15:15',
                'updated_at' => '2025-07-01 11:15:15',
            ],
            [
                'pesanan_id' => 17,
                'alamat_pengiriman' => 'jl mna',
                'tanggal_kirim' => '2025-07-01',
                'status_pengiriman' => 'Diproses',
                'created_at' => '2025-07-01 11:28:49',
                'updated_at' => '2025-07-01 11:28:49',
            ],
            [
                'pesanan_id' => 19,
                'alamat_pengiriman' => 'siapakamu',
                'tanggal_kirim' => '2025-07-01',
                'status_pengiriman' => 'Diproses',
                'created_at' => '2025-07-01 12:06:58',
                'updated_at' => '2025-07-01 12:06:58',
            ],
            [
                'pesanan_id' => 20,
                'alamat_pengiriman' => 'jl mna',
                'tanggal_kirim' => '2025-07-03',
                'status_pengiriman' => 'Diproses',
                'created_at' => '2025-07-03 11:42:19',
                'updated_at' => '2025-07-03 11:42:19',
            ],
            [
                'pesanan_id' => 21,
                'alamat_pengiriman' => 'DIMANAAAAA',
                'tanggal_kirim' => '2025-07-04',
                'status_pengiriman' => 'Diproses',
                'created_at' => '2025-07-04 05:49:40',
                'updated_at' => '2025-07-04 05:49:40',
            ],
            [
                'pesanan_id' => 23,
                'alamat_pengiriman' => 'jl mna',
                'tanggal_kirim' => '2025-07-04',
                'status_pengiriman' => 'Diproses',
                'created_at' => '2025-07-04 06:06:10',
                'updated_at' => '2025-07-04 06:06:10',
            ],
        ];

        foreach ($pengirimen as $pengiriman) {
            Pengiriman::create($pengiriman);
        }
    }
} 