@extends('layout')

@section('title', 'Form Pengiriman')
@section('judul', 'Form Pengiriman')

@section('content')
@if(session('success'))
    <div class="bg-green-200 text-green-800 px-4 py-2 rounded mb-4">
        {{ session('success') }}
    </div>
@endif

<form action="{{ route('pengiriman.store') }}" method="POST" class="bg-purple-100 p-6 rounded-xl shadow-md">
    @csrf

    @php $pesananPertama = $pesanan->first(); @endphp

    {{-- Hidden ID pesanan pertama aja --}}
    <input type="hidden" name="pesanan_id" value="{{ $pesananPertama->id }}">

    <div class="mb-4">
        <label class="block text-purple-700 font-bold">Pesanan</label>
        <ul class="bg-purple-50 p-4 rounded text-purple-800">
            @foreach($pesanan as $item)
                <li>{{ $item->produk->nama_baju }} (x{{ $item->jumlah }}) - Rp{{ number_format($item->total_harga, 0, ',', '.') }}</li>
            @endforeach
        </ul>
    </div>

    <div class="mb-4">
        <label class="block text-purple-700 font-bold">Alamat Pengiriman</label>
        <input type="text" name="alamat_pengiriman"
            value="{{ $pesananPertama->pelanggan->alamat }}"
            class="w-full px-3 py-2 border rounded bg-gray-100" readonly>
    </div>

    <div class="mb-4">
        <label class="block text-purple-700 font-bold">Tanggal Kirim</label>
        <input type="date" name="tanggal_kirim"
            value="{{ \Carbon\Carbon::now()->format('Y-m-d') }}"
            class="w-full px-3 py-2 border rounded" required>
    </div>

    <input type="hidden" name="status_pengiriman" value="Diproses">

    <button type="submit" class="bg-purple-500 text-white px-4 py-2 rounded hover:bg-purple-600">
        Simpan & Selesaikan 🚚
    </button>
</form>
@endsection
