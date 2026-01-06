<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{ config('app.name', 'Hall of Fame') }} - @yield('title')</title>
    
    {{-- @vite(['resources/css/app.css', 'resources/js/app.js']) --}}
    {{-- Vite assets commented out - install Node.js and run 'npm install' then 'npm run dev' to enable --}}
</head>
<body class="antialiased">
    <x-navigation />
    
    <main>
        @yield('content')
    </main>
    
    <x-footer />
</body>
</html>
