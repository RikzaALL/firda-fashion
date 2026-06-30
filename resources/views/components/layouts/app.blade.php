<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Firda Fashion — Esensi dari Sebuah Gaya</title>
    <meta name="description" content="Firda Fashion — Butik jahit, pembuatan pola, dan sablon. Wujudkan ide pakaian Anda bersama kami.">
    <link rel="icon" type="image/webp" href="{{ asset('assets/Firda_Fashion_Logo-removebg-preview.png') }}">
    @vite('resources/css/app.css')
    @livewireStyles
</head>
<body>
    <x-navbar />

    <main>
        {{ $slot }}
    </main>

    <x-footer />

    @vite('resources/js/app.js')
    @livewireScripts
</body>
</html>
