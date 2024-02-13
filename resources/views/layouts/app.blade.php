<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

        <style>
            @media print {
                .element-a-masquer {
                    display: none;
                }
            }
        </style>

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body class="antialiased">
        {{-- <div class="min-h-screen bg-gray-100 dark:bg-gray-900"> --}}

            <x-layout.navbar></x-layout.navbar>
            <!-- Page Heading -->

            <!-- Page Content -->
            <main>
                {{ $slot }}
            </main>

            <x-layout.footer></x-layout.footer>
        {{-- </div> --}}
    </body>
</html>
