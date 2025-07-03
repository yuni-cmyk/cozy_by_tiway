@extends('layout')
@section('title', 'Pembayaran')
@section('judul', 'Data Pembayaran')

@section('content')
<a href="{{ route('pembayaran.create') }}" class="bg-purple-500 text-white px-4 py-2 rounded hover:bg-purple-600 mb-4 inline-block">+ Tambah Pembayaran</a>

<table class="w-full table-auto bg-pink-100 rounded-xl overflow-hidden">
    <thead class="bg-purple-300 text-white">
        <tr>
            <th class="px-4 py-2">Pesanan</th>
            <th class="px-4 py-2">Metode</th>
            <th class="px-4 py-2">Jumlah</th>
            <th class="px-4 py-2">Tanggal</th>
            <th class="px-4 py-2">Aksi</th>
        </tr>
    </thead>
    <tbody>
        @foreach($pembayaran as $item)
        <tr class="text-purple-700">
            <td class="border px-4 py-2">#{{ $item->pesanan->id }} - {{ $item->pesanan->pelanggan->nama_pelanggan }}</td>
            <td class="border px-4 py-2">{{ $item->metode_pembayaran }}</td>
            <td class="border px-4 py-2">Rp{{ number_format($item->jumlah_bayar, 0, ',', '.') }}</td>
            <td class="border px-4 py-2">{{ $item->tanggal_bayar }}</td>
            <td class="border px-4 py-2">
                <a href="{{ route('pembayaran.edit', $item->id) }}" class="bg-yellow-400 px-3 py-1 rounded">Edit</a>
                <form action="{{ route('pembayaran.destroy', $item->id) }}" method="POST" class="inline">
                    @csrf @method('DELETE')
                    <button class="bg-red-400 px-3 py-1 text-white rounded">Hapus</button>
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
@endsection
