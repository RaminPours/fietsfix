<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'FietsFix') }}</title>

    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet">

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="font-sans antialiased min-h-screen flex flex-col">
    @include('layouts.navigation')

    <main class="flex-1">
        @isset($header)
            <header class="max-w-6xl mx-auto px-6 pt-8">
                {{ $header }}
            </header>
        @endisset

        @yield('content')
        {{ $slot ?? '' }}
    </main>

    <footer class="bg-gray-800 text-white py-6">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
            <p>&copy; {{ date('Y') }} FietsFix. Alle rechten voorbehouden.</p>
        </div>
    </footer>
</body>
</html>