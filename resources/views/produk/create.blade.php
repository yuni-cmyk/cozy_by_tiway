@extends('layout')
@section('title', 'Tambah Produk')
@section('judul', 'Tambah Produk')

@section('content')
<form action="{{ route('produk.store') }}" method="POST" class="bg-pink-100 p-6 rounded-xl shadow max-w-md mx-auto">
    @csrf
    <label class="block mb-2">Nama Baju</label>
    <input type="text" name="nama_baju" class="w-full p-2 rounded border mb-4" required>

    <label class="block mb-2">Harga</label>
    <input type="number" name="harga" class="w-full p-2 rounded border mb-4" required>

    <button type="submit" class="bg-purple-500 text-white px-4 py-2 rounded hover:bg-purple-600">Simpan</button>
</form>
@endsection
