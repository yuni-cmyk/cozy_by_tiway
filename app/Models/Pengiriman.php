<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pengiriman extends Model
{
    use HasFactory;

    protected $fillable = [
        'pesanan_id',
        'alamat_pengiriman',
        'tanggal_kirim',
        'status_pengiriman'
    ];

    public function pesanan()
    {
        return $this->belongsTo(Pesanan::class);
    }
}
