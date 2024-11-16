<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Librasmart</title>
        <link rel="icon" href="https://img.icons8.com/?size=100&id=xv9gnRfYNsNJ&format=png&color=000000" >
        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

            @vite(['resources/css/app.css', 'resources/js/app.js'])

    </head>
    <body class="font-sans antialiased  ">
       <x-navbar></x-navbar>
       <div class="pt-24 ">
           {{ $slot }}
       </div>
       <x-footer></x-footer>
      </body>
      </html>
      