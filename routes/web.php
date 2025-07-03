<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use App\Http\Controllers\ProdukController;
use App\Http\Controllers\PelangganController;
use App\Http\Controllers\PesananController;
use App\Http\Controllers\PembayaranController;
use App\Http\Controllers\PengirimanController;

Route::get('/', function () {
    return redirect()->route('login');
});

Route::get('/dashboard', function () {
    $pelanggan = \App\Models\Pelanggan::all();
    return view('dashboard', compact('pelanggan'));
})->middleware(['auth'])->name('dashboard');

Route::post('/dashboard', function (Request $request) {
    \App\Models\Pelanggan::create($request->all());
    return redirect()->route('produk.index')->with('success', 'Pelanggan berhasil ditambahkan! Lanjut pilih produk yaa 💕');
})->middleware(['auth'])->name('dashboard.store');

Route::middleware(['auth'])->group(function () {
    Route::resource('pelanggan', PelangganController::class);
    Route::resource('produk', ProdukController::class);
    Route::resource('pesanan', PesananController::class);
    Route::resource('pembayaran', PembayaranController::class);
    Route::resource('pengiriman', PengirimanController::class);

    // ✅ yang ini udah diperbaiki:
    Route::get('pembayaran/create', [PembayaranController::class, 'create'])->name('pembayaran.create');
});

require __DIR__.'/auth.php';