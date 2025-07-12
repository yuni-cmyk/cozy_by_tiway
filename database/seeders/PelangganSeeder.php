<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Pelanggan;

class PelangganSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $pelanggans = [
            [
                'nama_pelanggan' => 'aliza',
                'email' => 'yourrr05babyyy@gmail.com',
                'no_telepon' => '088888',
                'alamat' => 'jl mna',
                'created_at' => '2025-07-01 04:18:29',
                'updated_at' => '2025-07-01 04:18:29',
            ],
            [
                'nama_pelanggan' => 'aliza',
                'email' => 'yourrr05babyyy@gmail.com',
                'no_telepon' => '088888',
                'alamat' => 'jl mna',
                'created_at' => '2025-07-01 04:34:01',
                'updated_at' => '2025-07-01 04:34:01',
            ],
            [
                'nama_pelanggan' => 'aliza',
                'email' => 'yourrr05babyyy@gmail.com',
                'no_telepon' => '088888',
                'alamat' => 'jl mna',
                'created_at' => '2025-07-01 04:43:21',
                'updated_at' => '2025-07-01 04:43:21',
            ],
            [
                'nama_pelanggan' => 'filzah',
                'email' => 'yourrr05babyyy@gmail.com',
                'no_telepon' => '088888',
                'alamat' => 'jl mna',
                'created_at' => '2025-07-01 05:21:35',
                'updated_at' => '2025-07-01 05:21:35',
            ],
            [
                'nama_pelanggan' => 'filzah',
                'email' => 'yourrr05babyyy@gmail.com',
                'no_telepon' => '088888',
                'alamat' => 'jl mna',
                'created_at' => '2025-07-01 05:30:46',
                'updated_at' => '2025-07-01 05:30:46',
            ],
            [
                'nama_pelanggan' => 'filzah',
                'email' => 'yourrr05babyyy@gmail.com',
                'no_telepon' => '088888',
                'alamat' => 'jl mna',
                'created_at' => '2025-07-01 05:40:55',
                'updated_at' => '2025-07-01 05:40:55',
            ],
            [
                'nama_pelanggan' => 'rafli',
                'email' => 'yourrr05babyyy@gmail.com',
                'no_telepon' => '088888',
                'alamat' => 'jl mna',
                'created_at' => '2025-07-01 11:11:11',
                'updated_at' => '2025-07-01 11:11:11',
            ],
            [
                'nama_pelanggan' => 'rafli',
                'email' => 'yourrr05babyyy@gmail.com',
                'no_telepon' => '088888',
                'alamat' => 'jl mna',
                'created_at' => '2025-07-01 11:28:26',
                'updated_at' => '2025-07-01 11:28:26',
            ],
            [
                'nama_pelanggan' => 'rafli',
                'email' => 'yourrr05babyyy@gmail.com',
                'no_telepon' => '088888',
                'alamat' => 'siapakamu',
                'created_at' => '2025-07-01 12:06:34',
                'updated_at' => '2025-07-01 12:06:34',
            ],
            [
                'nama_pelanggan' => 'SIAPAKEK',
                'email' => 'yourrr05babyyy@gmail.com',
                'no_telepon' => '088888',
                'alamat' => 'siapakamu',
                'created_at' => '2025-07-03 11:33:25',
                'updated_at' => '2025-07-03 11:33:25',
            ],
            [
                'nama_pelanggan' => 'SIAPAKEK',
                'email' => 'yourrr05babyyy@gmail.com',
                'no_telepon' => '088888',
                'alamat' => 'jl mna',
                'created_at' => '2025-07-03 11:41:58',
                'updated_at' => '2025-07-03 11:41:58',
            ],
            [
                'nama_pelanggan' => 'SICANTIK',
                'email' => 'damaradama6@gmail.com',
                'no_telepon' => '08888888',
                'alamat' => 'DIMANAAAAA',
                'created_at' => '2025-07-04 05:49:18',
                'updated_at' => '2025-07-04 05:49:18',
            ],
            [
                'nama_pelanggan' => 'SICANTIK',
                'email' => 'damaradama6@gmail.com',
                'no_telepon' => '08888888',
                'alamat' => 'jl mna',
                'created_at' => '2025-07-04 06:05:52',
                'updated_at' => '2025-07-04 06:05:52',
            ],
        ];

        foreach ($pelanggans as $pelanggan) {
            Pelanggan::create($pelanggan);
        }
    }
} 