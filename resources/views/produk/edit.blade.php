@extends('layout')
@section('title', 'Edit Produk')
@section('judul', 'Edit Produk')

@section('content')
<form action="{{ route('produk.update', $produk->id) }}" method="POST" class="bg-pink-100 p-6 rounded-xl shadow max-w-md mx-auto">
    @csrf
    @method('PUT')

    <label class="block mb-2">Nama Baju</label>
    <input type="text" name="nama_baju" value="{{ $produk->nama_baju }}" class="w-full p-2 rounded border mb-4" required>

    <label class="block mb-2">Harga</label>
    <input type="number" name="harga" value="{{ $produk->harga }}" class="w-full p-2 rounded border mb-4" required>

    <button type="submit" class="bg-purple-500 text-white px-4 py-2 rounded hover:bg-purple-600">Update</button>
</form>
@endsection
