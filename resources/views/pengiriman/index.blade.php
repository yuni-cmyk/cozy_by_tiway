@extends('layout')

@section('title', 'Pengiriman')
@section('judul', 'Data Pengiriman')

@section('content')
@if(session('success'))
    <div class="bg-green-200 text-green-800 px-4 py-2 rounded mb-4">
        {{ session('success') }}
    </div>
@endif

<a href="{{ route('pengiriman.create') }}" class="bg-purple-500 text-white px-4 py-2 rounded hover:bg-purple-600 mb-4 inline-block">+ Tambah Pengiriman</a>

<table class="w-full table-auto bg-lavender shadow-md rounded">
    <thead class="bg-purple-300 text-white">
        <tr>
            <th class="px-4 py-2">Nama Pelanggan</th>
            <th class="px-4 py-2">Produk</th>
            <th class="px-4 py-2">Alamat</th>
            <th class="px-4 py-2">Tanggal Kirim</th>
        </tr>
    </thead>
    <tbody>
        @foreach($pengiriman as $item)
        <tr class="border-t">
            <td class="px-4 py-2">{{ $item->pesanan->pelanggan->nama_pelanggan }}</td>
            <td class="px-4 py-2">{{ $item->pesanan->produk->nama_baju }}</td>
            <td class="px-4 py-2">{{ $item->alamat_pengiriman }}</td>
            <td class="px-4 py-2">{{ $item->tanggal_kirim }}</td>
        </tr>
        @endforeach
    </tbody>
</table>
@endsection
