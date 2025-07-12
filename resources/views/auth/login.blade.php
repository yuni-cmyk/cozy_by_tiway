@extends('layouts.app')

@section('title', 'Login')

@section('content')
<div class="min-h-screen flex items-center justify-center bg-lavender">
    <div class="bg-lavender p-8 rounded-2xl shadow-xl border border-purple-300 w-full max-w-md animate-fade-in-up">
        <div class="text-center">
            <h2 class="text-3xl font-extrabold text-white-600">Login</h2>
            <p class="text-sm text-gray-600">Yuk masuk ke akun kamu~</p>
        </div>

        <form method="POST" action="{{ route('login') }}" class="space-y-6 mt-6">
            @csrf

            <div>
                <label for="email" class="block text-sm font-medium text-white-700">Email</label>
                <input id="email" name="email" type="email" required autofocus
                    class="w-full px-4 py-2 mt-1 border rounded-lg border-pink-300 focus:ring-pink-300 text-pink-800 focus:outline-none">
            </div>

            <div>
                <label for="password" class="block text-sm font-medium text-pink-700">Password</label>
                <input id="password" name="password" type="password" required
                    class="w-full px-4 py-2 mt-1 border rounded-lg border-pink-300 focus:ring-pink-300 text-pink-800 focus:outline-none">
            </div>

            <div>
                <button type="submit"
                    class="w-full bg-pastelpurple-500 hover:bg-pastelpuple-600 text-white font-bold py-2 px-4 rounded-xl transition transform hover:scale-105 duration-300">
                    Login
                </button>
            </div>
        </form>

        <p class="mt-6 text-center text-sm text-gray-700">
            Belum punya akun?
            <a href="{{ route('register') }}" class="text-white-600 hover:text-purple-800 font-semibold">Daftar di sini</a>
        </p>
    </div>
</div>
@endsection
