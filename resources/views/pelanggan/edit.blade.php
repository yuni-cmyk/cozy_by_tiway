@extends('layout')
@section('title', 'Edit Pelanggan')
@section('judul', 'Edit Data Pelanggan')

@section('content')
<form action="{{ route('pelanggan.update', $pelanggan->id) }}" method="POST" class="bg-purple-100 p-6 rounded-xl shadow max-w-md mx-auto">
    @csrf
    @method('PUT')

    <label class="block mb-2">nama Pelanggan</label>
    <input type="text" name="nama_pelanggan" value="{{ $pelanggan->nama_pelanggan }}" class="w-full p-2 rounded border mb-4" required>

    <label class="block mb-2">email</label>
    <input type="email" name="email" value="{{ $pelanggan->email }}" class="w-full p-2 rounded border mb-4" required>

    <label class="block mb-2">no_telepon</label>
    <input type="no_telepon" name="no_telepon" value="{{ $pelanggan->no_telepon }}" class="w-full p-2 rounded border mb-4" required>

    <label class="block mb-2">alamat</label>
    <input type="alamat" name="alamat" value="{{ $pelanggan->alamat }}" class="w-full p-2 rounded border mb-4" required>

    <button type="submit" class="bg-purple-500 text-white px-4 py-2 rounded hover:bg-purple-600">Update</button>
</form>
@endsection
