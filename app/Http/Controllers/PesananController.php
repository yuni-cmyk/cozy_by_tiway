<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pesanan;
use App\Models\Pelanggan;
use App\Models\Produk;

class PesananController extends Controller
{
    public function index()
    {
        $pesanan = Pesanan::with(['pelanggan', 'produk'])->get();
        return view('pesanan.index', compact('pesanan'));
    }

    public function create(Request $request)
    {
        $produkDipilih = $request->input('produk_id', []);
        $produk = Produk::whereIn('id', $produkDipilih)->get();

        // Ambil pelanggan terakhir yg daftar (asumsi dia yang mesen)
        $pelanggan = Pelanggan::latest()->first();

        return view('pesanan.create', compact('produk', 'pelanggan'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'pelanggan_id' => 'required|exists:pelanggans,id',
            'produk_id' => 'required|array',
            'produk_id.*' => 'exists:produks,id',
            'jumlah' => 'required|array',
            'jumlah.*' => 'numeric|min:1'
        ]);

        $pelanggan_id = $request->pelanggan_id;
        $produk_ids = $request->produk_id;
        $jumlahs = $request->jumlah;

        $pesanan_ids = [];

        foreach ($produk_ids as $index => $produk_id) {
            $produk = Produk::findOrFail($produk_id);
            $jumlah = $jumlahs[$index];
            $total = $produk->harga * $jumlah;

            $pesanan = Pesanan::create([
                'pelanggan_id' => $pelanggan_id,
                'produk_id' => $produk_id,
                'jumlah' => $jumlah,
                'total_harga' => $total,
            ]);

            $pesanan_ids[] = $pesanan->id;
        }

        // Redirect ke halaman pembayaran dengan semua ID pesanan
        return redirect()->route('pembayaran.create', [
            'pesanan_id' => implode(',', $pesanan_ids)
        ])->with('success', 'Pesanan berhasil disimpan! Lanjut ke pembayaran yaa 💸');
    }

    public function edit($id)
    {
        $pesanan = Pesanan::findOrFail($id);
        $pelanggan = Pelanggan::all();
        $produk = Produk::all();
        return view('pesanan.edit', compact('pesanan', 'pelanggan', 'produk'));
    }

    public function update(Request $request, $id)
    {
        $pesanan = Pesanan::findOrFail($id);

        $request->validate([
            'pelanggan_id' => 'required|exists:pelanggans,id',
            'produk_id' => 'required|exists:produks,id',
            'jumlah' => 'required|numeric|min:1'
        ]);

        $produk = Produk::findOrFail($request->produk_id);
        $total = $produk->harga * $request->jumlah;

        $pesanan->update([
            'pelanggan_id' => $request->pelanggan_id,
            'produk_id' => $request->produk_id,
            'jumlah' => $request->jumlah,
            'total_harga' => $total,
        ]);

        return redirect()->route('pesanan.index')
            ->with('success', 'Pesanan berhasil diperbarui!');
    }

    public function destroy($id)
    {
        Pesanan::destroy($id);
        return back()->with('success', 'Pesanan berhasil dihapus!');
    }
}