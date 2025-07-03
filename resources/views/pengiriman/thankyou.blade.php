@extends('layout')

@section('title', 'Terima Kasih')
@section('judul', 'Terima Kasih Sudah Berbelanja!')

@section('content')
<div class="bg-pink-100 text-center p-8 rounded-xl shadow-lg">
    <h2 class="text-2xl font-bold text-purple-700 mb-4">🎉 Terima kasih sudah berbelanja di BajuKita!</h2>
    <p class="text-purple-600 mb-6">Pesanan kamu sedang diproses dan akan segera dikirimkan 💌</p>

    <div class="flex justify-center gap-4">
        <a href="{{ route('produk.index') }}" class="bg-purple-500 hover:bg-purple-600 text-white px-4 py-2 rounded">
            Pesan Lagi
        </a>
        <a href="{{ route('dashboard') }}" class="bg-gray-300 hover:bg-gray-400 text-black px-4 py-2 rounded">
            Halaman Awal
        </a>
    </div>
</div>
@endsection
