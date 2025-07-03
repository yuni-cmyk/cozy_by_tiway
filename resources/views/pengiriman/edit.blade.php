@extends('layout')

@section('title', 'Edit Pengiriman')
@section('judul', 'Edit Pengiriman')

@section('content')
<form action="{{ route('pengiriman.update', $pengiriman->id) }}" method="POST" class="bg-pink-100 p-6 rounded-xl shadow-md">
    @csrf
    @method('PUT')

    <div class="mb-4">
        <label class="block text-purple-700 font-bold">Pesanan</label>
        <select name="pesanan_id" required class="w-full px-3 py-2 border rounded">
            @foreach($pesanan as $item)
                <option value="{{ $item->id }}" {{ $pengiriman->pesanan_id == $item->id ? 'selected' : '' }}>
                    {{ $item->pelanggan->nama_pelanggan }} - {{ $item->produk->nama_baju }}
                </option>
            @endforeach
        </select>
    </div>

    <div class="mb-4">
        <label class="block text-purple-700 font-bold">Alamat Pengiriman</label>
        <input type="text" name="alamat_pengiriman" value="{{ $pengiriman->alamat_pengiriman }}" required class="w-full px-3 py-2 border rounded">
    </div>

    <div class="mb-4">
        <label class="block text-purple-700 font-bold">Tanggal Kirim</label>
        <input type="date" name="tanggal_kirim" value="{{ $pengiriman->tanggal_kirim }}" required class="w-full px-3 py-2 border rounded">
    </div>

    <button type="submit" class="bg-purple-500 text-white px-4 py-2 rounded hover:bg-purple-600">Update</button>
</form>
@endsection
