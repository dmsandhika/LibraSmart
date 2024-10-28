<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

            @vite(['resources/css/app.css', 'resources/js/app.js'])

    </head>
    <body class="font-sans antialiased  dark:bg-black dark:text-white/50">
       <x-navbar></x-navbar>
       <div>

        <<div class="h-screen w-full bg-cover bg-center flex items-center justify-center flex-col" style="background-image: url('{{ asset('img/bg-home.svg') }}');">
            <div class="max-w-4xl lg:mt-36 px-4 text-center">
                <h1 class="text-[#0d9488] text-6xl font-extrabold">Akses Buku, Artikel, dan Banyak Lagi Secara Gratis!</h1>
                
                <p class="text-[#f9f8f8] mt-6 pt-4 text-3xl font-bold">Pinjam kapan pun tanpa biaya.</p>
            </div>
        </div>
        
        <div class="h-auto bg-[#0d9488] lg:bg-[#0fa699] px-24 py-24">
            <h3 class="text-2xl font-bold text-slate-200 pb-12">Buku Sedang Tren</h3>
            <div class="flex flex-wrap justify-evenly">
                <x-card></x-card>
                <x-card></x-card>
                <x-card></x-card>
                <x-card></x-card>
                <x-card></x-card>
            </div>
        </div>
        
       </div>
    
    
    </body>
</html>
