@extends('layout')
@section('title', 'Tambah Pelanggan')
@section('judul', 'Tambah Data Pelanggan')

@section('content')
<form action="{{ route('pelanggan.store') }}" method="POST" class="bg-pink-100 p-6 rounded-xl shadow max-w-md mx-auto">
    @csrf
    <label class="block mb-2">nama Pelanggan</label>
    <input type="text" name="nama_pelanggan" class="w-full p-2 rounded border mb-4" required>

    <label class="block mb-2">email</label>
    <input type="email" name="email" class="w-full p-2 rounded border mb-4" required>

    <label class="block mb-2">no_telepon</label>
    <input type="email" name="no_telepon" class="w-full p-2 rounded border mb-4" required>

    <label class="block mb-2">alamat</label>
    <input type="email" name="alamat" class="w-full p-2 rounded border mb-4" required>

    <button type="submit" class="bg-purple-500 text-white px-4 py-2 rounded hover:bg-purple-600">Simpan</button>
</form>
@endsection
