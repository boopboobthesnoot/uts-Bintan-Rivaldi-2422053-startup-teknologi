<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body class="font-sans text-gray-900 antialiased">
 <div class="min-h-screen flex flex-col sm:justify-center items-center pt-6 sm:pt-0 bg-gradient-to-tr from-blue-900 via-sky-800 to-slate-900">
    <div>
        <a href="/">
            <div class="flex flex-col items-center justify-center text-white font-bold text-3xl tracking-wider">
                <span class="text-4xl">⚓</span>
                <span class="bg-clip-text text-transparent bg-gradient-to-r from-cyan-400 to-teal-200">SakuPulau</span>
            </div>
        </a>
    </div>

    <div class="w-full sm:max-w-md mt-6 px-6 py-8 bg-white/95 backdrop-blur-sm shadow-2xl overflow-hidden sm:rounded-2xl border border-white/20">
        {{ $slot }}
    </div>
</div>
    </body>
</html>
