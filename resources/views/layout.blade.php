<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>@yield('title')</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="bg-pink-50 text-purple-800 font-sans">
    <div class="container mx-auto p-6">
        <h1 class="text-3xl font-bold text-center text-purple-600 mb-6">@yield('judul')</h1>
        @yield('content')
    </div>
</body>
</html>