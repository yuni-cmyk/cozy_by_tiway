<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Produk;

class ProdukSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $produks = [
            [
                'nama_baju' => 'Hoodie',
                'gambar' => 'hoodie.jpg',
                'harga' => 100000.00,
                'created_at' => '2025-06-29 16:18:29',
                'updated_at' => '2025-06-29 16:18:29',
            ],
            [
                'nama_baju' => 'Dress',
                'gambar' => 'dress.jpg',
                'harga' => 200000.00,
                'created_at' => '2025-06-29 16:20:28',
                'updated_at' => '2025-06-29 16:20:28',
            ],
            [
                'nama_baju' => 'turtleneck',
                'gambar' => 'turtleneck.jpg',
                'harga' => 150000.00,
                'created_at' => '2025-06-29 16:21:40',
                'updated_at' => '2025-06-29 16:21:40',
            ],
        ];

        foreach ($produks as $produk) {
            Produk::create($produk);
        }
    }
} 
