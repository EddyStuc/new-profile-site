<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">

        <!-- Styles -->
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">
        <style>[x-cloak] { display: none }</style>
    </head>
    <body>
        <main class="flex min-h-screen w-screen">
            @include('layouts.navigation')
            {{ $slot }}
        </main>
    </body>
        <!-- Scripts -->
        <script src="{{ asset('js/app.js') }}" defer></script>
</html>