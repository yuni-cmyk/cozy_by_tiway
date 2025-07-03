@extends('layouts.app')

@section('title', 'Login')

@section('content')
<div class="min-h-screen flex items-center justify-center bg-pink-100 py-12 px-4">
    <div class="bg-white p-8 rounded-2xl shadow-xl border border-pink-300 w-full max-w-md animate-fade-in-up">
        <div class="text-center">
            <img src="https://i.ibb.co/yP6STrQ/cute-login.png" alt="Cute Login" class="w-32 mx-auto mb-4">
            <h2 class="text-3xl font-extrabold text-pink-600">Login</h2>
            <p class="text-sm text-gray-600">Yuk masuk ke akun kamu~</p>
        </div>

        <form method="POST" action="{{ route('login') }}" class="space-y-6 mt-6">
            @csrf

            <div>
                <label for="email" class="block text-sm font-medium text-pink-700">Email</label>
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
                    class="w-full bg-pink-500 hover:bg-pink-600 text-white font-bold py-2 px-4 rounded-xl transition transform hover:scale-105 duration-300">
                    Login
                </button>
            </div>
        </form>

        <p class="mt-6 text-center text-sm text-gray-700">
            Belum punya akun?
            <a href="{{ route('register') }}" class="text-pink-600 hover:text-pink-800 font-semibold">Daftar di sini</a>
        </p>
    </div>
</div>
@endsection
