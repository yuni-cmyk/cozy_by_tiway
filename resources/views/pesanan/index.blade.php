@extends('layout')
@section('title', 'Pesanan')
@section('judul', 'Daftar Pesanan')

@section('content')
@if(session('success'))
    <div class="bg-green-100 text-green-700 p-3 rounded mb-4">
        {{ session('success') }}
    </div>
@endif

<a href="{{ route('pesanan.create') }}" class="bg-purple-500 text-white px-4 py-2 rounded hover:bg-purple-600 mb-4 inline-block">+ Tambah Pesanan</a>

<div class="overflow-x-auto bg-pink-100 rounded-xl shadow-md p-4">
    <table class="w-full table-auto border-collapse">
        <thead>
            <tr class="bg-purple-200 text-purple-800">
                <th class="px-4 py-2">#</th>
                <th class="px-4 py-2">Pelanggan</th>
                <th class="px-4 py-2">Produk</th>
                <th class="px-4 py-2">Jumlah</th>
                <th class="px-4 py-2">Total Harga</th>
                <th class="px-4 py-2">Aksi</th>
            </tr>
        </thead>
        <tbody>
            @forelse($pesanan as $item)
            <tr class="border-t border-purple-300 text-purple-700">
                <td class="px-4 py-2">{{ $loop->iteration }}</td>
                <td class="px-4 py-2">{{ $item->pelanggan->nama_pelanggan }}</td>
                <td class="px-4 py-2">{{ $item->produk->nama_baju }}</td>
                <td class="px-4 py-2">{{ $item->jumlah }}</td>
                <td class="px-4 py-2">Rp{{ number_format($item->total_harga, 0, ',', '.') }}</td>
                <td class="px-4 py-2 flex gap-2">
                    <a href="{{ route('pesanan.edit', $item->id) }}" class="bg-yellow-400 px-3 py-1 rounded">Edit</a>
                    <form action="{{ route('pesanan.destroy', $item->id) }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button class="bg-red-400 text-white px-3 py-1 rounded">Hapus</button>
                    </form>
                </td>
            </tr>
            @empty
            <tr>
                <td colspan="6" class="text-center py-4 text-purple-500">Belum ada pesanan 💌</td>
            </tr>
            @endforelse
        </tbody>
    </table>
</div>
@endsection
