@extends('layout')
@section('title', 'Produk')
@section('judul', 'Pilih Produk')

@section('content')
<form action="{{ route('pesanan.create') }}" method="GET">
    <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-6">
        @foreach($produk as $item)
            <div class="bg-purple-100 p-4 rounded-2xl shadow hover:shadow-lg transition">
                <img src="{{ asset('storage/gambar_baju/' . $item->gambar) }}"
                    alt="{{ $item->nama_baju }}"
                    class="rounded-xl h-56 w-full object-contain bg-lavender p-2" />

                <h2 class="text-xl font-bold text-purple-700 mt-4">{{ $item->nama_baju }}</h2>
                <p class="text-purple-600 mb-2">Rp{{ number_format($item->harga, 0, ',', '.') }}</p>

                <div class="flex items-center gap-2 mt-2">
                    <input type="checkbox" name="produk_id[]" value="{{ $item->id }}"
                        class="w-5 h-5 text-purple-600 rounded border-purple-300 focus:ring-purple-500">
                    <label for="produk_id[]" class="text-sm text-purple-800">Pilih produk ini</label>
                </div>
            </div>
        @endforeach
    </div>

    <div class="text-center mt-6">
        <button type="submit"
            class="bg-purple-500 text-white px-6 py-2 rounded-lg hover:bg-purple-600 transition">
            Pesan Sekarang
        </button>
    </div>
</form>
@endsection
