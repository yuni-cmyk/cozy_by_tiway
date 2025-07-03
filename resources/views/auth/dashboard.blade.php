@extends('layouts.app')

@section('content')
<div class="max-w-xl mx-auto mt-10 bg-pink-100 p-6 rounded-xl shadow">
    <h1 class="text-2xl font-bold text-center text-purple-700 mb-4">Form Tambah Pelanggan</h1>

    <form action="{{ route('dashboard.store') }}" method="POST" class="space-y-4">
        @csrf

        <div>
            <label class="block font-semibold text-pink-700">Nama Pelanggan</label>
            <input type="text" name="nama_pelanggan" required class="w-full p-2 border border-pink-300 rounded">
        </div>

        <div>
            <label class="block font-semibold text-pink-700">Email</label>
            <input type="email" name="email" required class="w-full p-2 border border-pink-300 rounded">
        </div>

        <div>
            <label class="block font-semibold text-pink-700">No Telepon</label>
            <input type="text" name="no_telepon" required class="w-full p-2 border border-pink-300 rounded">
        </div>

        <div>
            <label class="block font-semibold text-pink-700">Alamat</label>
            <textarea name="alamat" required class="w-full p-2 border border-pink-300 rounded"></textarea>
        </div>

        <button type="submit" class="bg-pink-500 hover:bg-pink-600 text-white font-bold py-2 px-4 rounded w-full">
            Simpan
        </button>
    </form>
</div>
@endsection
