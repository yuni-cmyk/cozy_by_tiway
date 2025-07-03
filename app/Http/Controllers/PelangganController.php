<?php

namespace App\Http\Controllers;

use App\Models\Pelanggan;
use Illuminate\Http\Request;

class PelangganController extends Controller
{
    public function index() {
        $pelanggan = Pelanggan::all();
        return view('pelanggan.index', compact('pelanggan'));
    }

    public function create() {
        return view('pelanggan.create');
    }

    public function store(Request $request) {
        // kalau mau validasi bisa ditambahin ya ubub
        Pelanggan::create($request->all());

        // langsung ke produk abis simpan
        return redirect()->route('produk.index')
            ->with('success', '✨ Data pelanggan berhasil disimpan! Lanjut pilih produk yaa 💕');
    }

    public function edit($id) {
        $pelanggan = Pelanggan::findOrFail($id);
        return view('pelanggan.edit', compact('pelanggan'));
    }

    public function update(Request $request, $id) {
        $pelanggan = Pelanggan::findOrFail($id);
        $pelanggan->update($request->all());

        return redirect()->route('pelanggan.index')
            ->with('success', '📝 Data pelanggan berhasil diperbarui!');
    }

    public function destroy($id) {
        Pelanggan::destroy($id);
        return back()->with('success', '🗑️ Data pelanggan berhasil dihapus!');
    }
}
