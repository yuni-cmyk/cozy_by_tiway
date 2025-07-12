@extends('layout')
@section('title', 'Pembayaran')
@section('judul', 'Form Pembayaran')

@section('content')
@if(session('success'))
    <div class="bg-green-100 text-green-700 p-3 rounded mb-4 text-center font-semibold">
        {{ session('success') }}
    </div>
@endif

<form action="{{ route('pembayaran.store') }}" method="POST" class="bg-purple-100 p-6 rounded-xl shadow-md max-w-xl mx-auto animate-fade-in-up">
    @csrf

    {{-- Input semua ID pesanan --}}
    @foreach ($pesanan as $item)
        <input type="hidden" name="pesanan_id[]" value="{{ $item->id }}">
    @endforeach

    {{-- Nama Pelanggan --}}
    <div class="mb-4">
        <label class="block mb-1 text-purple-700 font-semibold">Nama Pelanggan</label>
        <input type="text" 
               value="{{ optional($pesanan->first()->pelanggan)->nama_pelanggan }}" 
               class="w-full p-2 rounded border border-purple-300 bg-gray-100" disabled>
    </div>

    {{-- Daftar Produk --}}
    <div class="mb-4">
        <label class="block mb-1 text-purple-700 font-semibold">Produk yang Dipesan</label>
        <ul class="list-disc pl-5 text-purple-700 bg-gray-100 p-3 rounded">
            @foreach($pesanan as $item)
                <li>{{ $item->produk->nama_baju }} (x{{ $item->jumlah }}) - Rp{{ number_format($item->total_harga, 0, ',', '.') }}</li>
            @endforeach
        </ul>
    </div>

    {{-- Metode Pembayaran --}}
    <div class="mb-4">
        <label class="block mb-1 text-purple-700 font-semibold">Metode Pembayaran</label>
        <select name="metode_pembayaran" class="w-full p-2 rounded border border-purple-300" required>
            <option disabled selected>-- Pilih Metode --</option>
            <option value="Transfer">Transfer</option>
            <option value="COD">COD</option>
            <option value="QRIS">QRIS</option>
        </select>
    </div>

    {{-- Total --}}
    <div class="mb-4">
        <label class="block mb-1 text-purple-700 font-semibold">Jumlah Bayar</label>
        <input type="number" name="jumlah_bayar" 
               value="{{ $pesanan->sum('total_harga') }}" 
               class="w-full p-2 rounded border border-purple-300 bg-gray-100" readonly>
    </div>

    {{-- Tanggal Otomatis --}}
    <div class="mb-4">
        <label class="block mb-1 text-purple-700 font-semibold">Tanggal Pembayaran</label>
        <input type="date" name="tanggal_bayar" 
               value="{{ \Carbon\Carbon::now()->format('Y-m-d') }}" 
               class="w-full p-2 rounded border border-purple-300 bg-gray-100" readonly>
    </div>

    <button class="bg-purple-500 hover:bg-purple-600 text-white px-4 py-2 rounded w-full">
        Bayar Sekarang 💰
    </button>
</form>
@endsection
