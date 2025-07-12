@extends('layouts.app')

@section('title', 'Register')

@section('content')
<div class="min-h-screen flex items-center justify-center bg-purple-50 py-12 px-4">
    <div class="bg-lavender p-8 rounded-2xl shadow-xl border border-pink-300 w-full max-w-md animate-fade-in-up">
        <div class="text-center">
            <h2 class="text-3xl font-extrabold text-violet-600">Daftar Akun</h2>
            <p class="text-sm text-gray-600">Isi datamu dulu yaa~</p>
        </div>

        {{-- tampilkan error validasi --}}
        @if ($errors->any())
            <div class="bg-red-100 text-red-700 p-4 mt-4 rounded-md">
                <ul class="list-disc list-inside">
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form method="POST" action="{{ route('register') }}" class="space-y-6 mt-6">
            @csrf

            <div>
                <label for="name" class="block text-sm font-medium text-pink-700">Nama</label>
                <input id="name" name="name" type="text" value="{{ old('name') }}" required
                    class="w-full px-4 py-2 mt-1 border rounded-lg border-pink-300 focus:ring-pink-300 text-pink-800 focus:outline-none">
            </div>

            <div>
                <label for="email" class="block text-sm font-medium text-pink-700">Email</label>
                <input id="email" name="email" type="email" value="{{ old('email') }}" required
                    class="w-full px-4 py-2 mt-1 border rounded-lg border-pink-300 focus:ring-pink-300 text-pink-800 focus:outline-none">
            </div>

            <div>
                <label for="password" class="block text-sm font-medium text-pink-700">Password</label>
                <input id="password" name="password" type="password" required
                    class="w-full px-4 py-2 mt-1 border rounded-lg border-pink-300 focus:ring-pink-300 text-pink-800 focus:outline-none">
            </div>

            <div>
                <label for="password_confirmation" class="block text-sm font-medium text-pink-700">Konfirmasi Password</label>
                <input id="password_confirmation" name="password_confirmation" type="password" required
                    class="w-full px-4 py-2 mt-1 border rounded-lg border-pink-300 focus:ring-pink-300 text-pink-800 focus:outline-none">
            </div>

            <div>
                <button type="submit"
                    class="w-full bg-pastelpurple-500 hover:bg-violet-600 text-white font-bold py-2 px-4 rounded-xl transition transform hover:scale-105 duration-300">
                    Daftar
                </button>
            </div>
        </form>

        <p class="mt-6 text-center text-sm text-gray-700">
            Sudah punya akun?
            <a href="{{ route('login') }}" class="text-violet-600 hover:text-pink-800 font-semibold">Login di sini</a>
        </p>
    </div>
</div>
@endsection
