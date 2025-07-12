@extends('layout')
@section('title', 'Buat Pesanan')
@section('judul', 'Form Pesan Baju')

@section('content')
@if(session('success'))
    <div class="bg-green-100 text-green-700 p-3 rounded mb-4 text-center font-semibold">
        {{ session('success') }}
    </div>
@endif

<form action="{{ route('pesanan.store') }}" method="POST" class="bg-purple-100 p-6 rounded-xl shadow-md max-w-xl mx-auto space-y-4">
    @csrf

    {{-- ID pelanggan otomatis --}}
    <input type="hidden" name="pelanggan_id" value="{{ $pelanggan->id }}">

    {{-- Nama pelanggan --}}
    <div>
        <label class="block mb-1 font-semibold text-purple-700">Nama Pelanggan</label>
        <input type="text" value="{{ $pelanggan->nama_pelanggan }}" disabled
               class="w-full p-2 rounded border border-purple-300 bg-purple-50">
    </div>

    {{-- Daftar produk --}}
    @foreach($produk as $index => $item)
        <div class="bg-lavender p-4 rounded-lg shadow-inner">
            <input type="hidden" name="produk_id[]" value="{{ $item->id }}">

            <div class="flex items-center gap-4">
                <img src="{{ asset('storage/gambar_baju/' . $item->gambar) }}" 
                     alt="{{ $item->nama_baju }}"
                     class="h-24 w-24 object-cover rounded-lg border">

                <div class="flex-1">
                    <p class="text-lg font-bold text-purple-700">{{ $item->nama_baju }}</p>
                    <p class="text-purple-600 mb-2">Harga: Rp{{ number_format($item->harga, 0, ',', '.') }}</p>

                    <label class="block text-sm font-semibold text-purple-700">Jumlah</label>
                    <input type="number" name="jumlah[]" min="1" required
                           class="w-full p-2 rounded border border-purple-300" placeholder="Masukkan jumlah">
                </div>
            </div>
        </div>
    @endforeach

    {{-- Tombol submit --}}
    <button class="w-full bg-purple-500 hover:bg-purple-600 text-white px-4 py-2 rounded transition">
        Simpan dan Lanjut Pembayaran 💸
    </button>
</form>
@endsection
