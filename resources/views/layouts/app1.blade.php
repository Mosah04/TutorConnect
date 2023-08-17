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

        {{-- Favicons --}}
        <link rel="icon" type="image/svg+xml" href="{{asset('favicon.svg')}}">
        <link rel="icon" type="image/png" href="{{asset('favicon.png')}}">

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body class="font-sans antialiased">
        <div class="min-h-screen bg-gray-100">
            @yield("navbarre")
            @yield("menu")
            <main>
                <div class="p-4 sm:ml-64">
                    <div class="p-4 border-2 border-gray-200 rounded-lg dark:border-gray-700 mt-14">

                      @yield('main')

                   </div>
                </div>

            </main>
    </body>
</html>
