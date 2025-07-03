<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pengiriman;
use App\Models\Pesanan;
use App\Models\Pembayaran;

class PengirimanController extends Controller
{
    public function index()
    {
        $pengiriman = Pengiriman::with('pesanan.pelanggan', 'pesanan.produk')->get();
        return view('pengiriman.index', compact('pengiriman'));
    }

    public function create()
    {
        // ambil pembayaran terakhir
        $pembayaranTerakhir = Pembayaran::latest()->first();

        // ambil semua pesanan yang dibayar oleh pembayaran ini
        $pesanan = Pesanan::with('pelanggan', 'produk')
            ->where('pembayaran_id', $pembayaranTerakhir->id)
            ->get();

        return view('pengiriman.create', compact('pesanan', 'pembayaranTerakhir'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'pesanan_id' => 'required|exists:pesanans,id',
            'alamat_pengiriman' => 'required|string',
            'tanggal_kirim' => 'required|date',
            'status_pengiriman' => 'required|string',
        ]);

        Pengiriman::create($request->all());

        // langsung ke halaman terima kasih
        return view('pengiriman.thankyou');
    }

    public function edit($id)
    {
        $pengiriman = Pengiriman::findOrFail($id);
        $pesanan = Pesanan::with('pelanggan', 'produk')->get();
        return view('pengiriman.edit', compact('pengiriman', 'pesanan'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'pesanan_id' => 'required|exists:pesanans,id',
            'alamat_pengiriman' => 'required|string',
            'tanggal_kirim' => 'required|date',
            'status_pengiriman' => 'required|string',
        ]);

        $pengiriman = Pengiriman::findOrFail($id);
        $pengiriman->update($request->all());

        return redirect()->route('pengiriman.index')->with('success', 'Data pengiriman berhasil diperbarui!');
    }

    public function destroy($id)
    {
        Pengiriman::destroy($id);
        return back()->with('success', 'Data pengiriman berhasil dihapus!');
    }
}
