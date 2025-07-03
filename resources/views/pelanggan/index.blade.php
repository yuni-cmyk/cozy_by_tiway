@extends('layout')
@section('title', 'Daftar Pelanggan')
@section('judul', 'Data Pelanggan')

@section('content')
<a href="{{ route('pelanggan.create') }}" class="bg-purple-500 text-white px-4 py-2 rounded hover:bg-purple-600 mb-4 inline-block">+ Tambah Pelanggan</a>

<table class="w-full table-auto bg-pink-100 rounded-xl overflow-hidden">
    <thead class="bg-purple-300 text-white">
        <tr>
            <th class="px-4 py-2">nama_pelanggan</th>
            <th class="px-4 py-2">email</th>
            <th class="px-4 py-2">no_telepon</th>
            <th class="px-4 py-2">alamat</th>
            <th class="px-4 py-2">Aksi</th>
        </tr>
    </thead>
    <tbody>
        @foreach($pelanggan as $item)
        <tr class="text-purple-700">
            <td class="border px-4 py-2">{{ $item->nama_pelanggan }}</td>
            <td class="border px-4 py-2">{{ $item->email }}</td>
            <td class="border px-4 py-2 space-x-2">
                <a href="{{ route('pelanggan.edit', $item->id) }}" class="bg-yellow-400 px-3 py-1 rounded">Edit</a>
                <form action="{{ route('pelanggan.destroy', $item->id) }}" method="POST" class="inline">
                    @csrf @method('DELETE')
                    <button class="bg-red-400 text-white px-3 py-1 rounded">Hapus</button>
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
@endsection
