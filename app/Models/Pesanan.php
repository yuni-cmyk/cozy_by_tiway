<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pesanan extends Model
{
    use HasFactory;

    protected $fillable = [
        'pelanggan_id',
        'produk_id',
        'jumlah',
        'total_harga',
        'tanggal_pesanan',
        'status',
        'pembayaran_id', // tambahkan ini
    ];

    public function pelanggan() {
        return $this->belongsTo(Pelanggan::class);
    }

    public function produk() {
        return $this->belongsTo(Produk::class);
    }

    public function pembayaran() {
        return $this->belongsTo(Pembayaran::class);
    }
}
