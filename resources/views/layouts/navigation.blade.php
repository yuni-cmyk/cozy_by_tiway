<nav class="bg-purple-400 shadow-md py-4 px-6 sticky top-0 z-50 animate-fade-in-up">
    <div class="container mx-auto flex justify-between items-center">
        <h1 class="text-xl font-bold text-white">👚 CozybyTiway</h1>

        <div class="space-x-4">
            @auth
                @if(!request()->routeIs('dashboard') && !request()->routeIs('dashboard.store'))
                    <a href="{{ route('dashboard') }}" class="text-white hover:bg-pastelpurple-500 px-3 py-1 rounded-md transition">Dashboard</a>
                    <a href="{{ route('pelanggan.index') }}" class="text-white hover:bg-pastelpurple-500 px-3 py-1 rounded-md transition">Pelanggan</a>
                    <a href="{{ route('produk.index') }}" class="text-white hover:bg-pastelpurple-500 px-3 py-1 rounded-md transition">Produk</a>
                    <a href="{{ route('pesanan.index') }}" class="text-white hover:bg-pastelpurple-500 px-3 py-1 rounded-md transition">Pesanan</a>
                    <a href="{{ route('pembayaran.index') }}" class="text-white hover:bg-pastelpurple-500 px-3 py-1 rounded-md transition">Pembayaran</a>
                    <a href="{{ route('pengiriman.index') }}" class="text-white hover:bg-pastelpurple-500 px-3 py-1 rounded-md transition">Pengiriman</a>
                @endif

                <form method="POST" action="{{ route('logout') }}" class="inline">
                    @csrf
                    <button class="text-white hover:bg-red-500 px-3 py-1 rounded-md transition">Logout</button>
                </form>
            @endauth

            @guest
                <a href="{{ route('login') }}" class="text-white hover:bg-pastelpurple-500 px-3 py-1 rounded-md transition">Login</a>
                <a href="{{ route('register') }}" class="text-white hover:bg-pastelpurple-500 px-3 py-1 rounded-md transition">Register</a>
            @endguest
        </div>
    </div>
</nav>
