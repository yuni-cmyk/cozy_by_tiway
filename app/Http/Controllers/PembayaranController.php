<?php

namespace App\Http\Controllers;

use App\Models\Pembayaran;
use App\Models\Pesanan;
use Illuminate\Http\Request;
use Carbon\Carbon;

class PembayaranController extends Controller
{
    public function index()
    {
        $pembayaran = Pembayaran::with('pesanan.pelanggan', 'pesanan.produk')->get();
        return view('pembayaran.index', compact('pembayaran'));
    }

    public function create(Request $request)
    {
        // Ambil semua ID pesanan dari query string
        $pesananIdString = $request->input('pesanan_id');
        if (!$pesananIdString) {
            return redirect()->route('pesanan.index')->with('error', 'Pesanan tidak ditemukan.');
        }

        $pesananIds = explode(',', $pesananIdString);
        $pesanan = Pesanan::with('pelanggan', 'produk')
            ->whereIn('id', $pesananIds)
            ->get();

        if ($pesanan->isEmpty()) {
            return redirect()->route('pesanan.index')->with('error', 'Data pesanan tidak valid.');
        }

        return view('pembayaran.create', compact('pesanan'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'pesanan_id' => 'required|array',
            'pesanan_id.*' => 'exists:pesanans,id',
            'metode_pembayaran' => 'required|string',
            'jumlah_bayar' => 'required|numeric',
            'tanggal_bayar' => 'required|date',
        ]);

        // Buat pembayaran baru
        $pembayaran = Pembayaran::create([
            'metode_pembayaran' => $request->metode_pembayaran,
            'jumlah_bayar' => $request->jumlah_bayar,
            'tanggal_bayar' => $request->tanggal_bayar,
        ]);

        // Hubungkan semua pesanan ke pembayaran ini
        Pesanan::whereIn('id', $request->pesanan_id)->update([
            'pembayaran_id' => $pembayaran->id
        ]);

        return redirect()->route('pengiriman.create')
            ->with('success', 'Pembayaran berhasil! Lanjut ke pengiriman yaa 🚚💕');
    }

    public function edit($id)
    {
        $pembayaran = Pembayaran::findOrFail($id);
        $pesanan = Pesanan::with('pelanggan', 'produk')
            ->where('pembayaran_id', $id)
            ->get();
        return view('pembayaran.edit', compact('pembayaran', 'pesanan'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'metode_pembayaran' => 'required|string',
            'jumlah_bayar' => 'required|numeric',
            'tanggal_bayar' => 'required|date',
        ]);

        $pembayaran = Pembayaran::findOrFail($id);
        $pembayaran->update([
            'metode_pembayaran' => $request->metode_pembayaran,
            'jumlah_bayar' => $request->jumlah_bayar,
            'tanggal_bayar' => $request->tanggal_bayar,
        ]);

        return redirect()->route('pembayaran.index')
            ->with('success', 'Pembayaran berhasil diperbarui!');
    }

    public function destroy($id)
    {
        // Kosongkan pembayaran_id pada pesanan terkait
        Pesanan::where('pembayaran_id', $id)->update(['pembayaran_id' => null]);

        // Hapus data pembayaran
        Pembayaran::destroy($id);

        return back()->with('success', 'Data pembayaran berhasil dihapus!');
    }
}