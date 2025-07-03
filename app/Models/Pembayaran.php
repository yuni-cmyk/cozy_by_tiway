<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pembayaran extends Model
{
    use HasFactory;

    protected $fillable = ['metode_pembayaran', 'jumlah_bayar', 'tanggal_bayar'];

    // satu pembayaran bisa punya banyak pesanan
    public function pesanans()
    {
        return $this->hasMany(Pesanan::class);
    }
}
