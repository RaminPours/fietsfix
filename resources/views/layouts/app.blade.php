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
 <body class="font-sans antialiased">

         <!-- NAVBAR -->
    <nav class="bg-white text-black shadow-md">
    <div class="max-w-8xl mx-auto">
        <div class="h-20 flex items-center relative">

            <!-- Logo links -->
            <a href="/" class="absolute left-3">
                <img
                    src="{{ asset('images/fietsfix2.png') }}"
                    alt="FietsFix"
                    class="h-[100px]"
                >
            </a>

            <!-- Menu gecentreerd -->
            <div class="flex justify-center gap-8 text-center w-full">

                <a href="/"
                   class="bg-white text-green-600 rounded-full font-bold hover:bg-green-200 px-5 py-2 transition">
                    Home
                </a>

                <a href="/fietssoorten"
                   class="bg-white text-green-600 rounded-full font-bold hover:bg-green-200 px-5 py-2 transition">
                    Fietssoorten
                </a>

                <a href="/fietsonderhoud"
                   class="bg-white text-green-600 rounded-full font-bold hover:bg-green-200 px-5 py-2 transition">
                    Fietsonderhoud
                </a>

                <a href="/contact"
                   class="bg-white text-green-600 px-5 py-2 rounded-full font-bold hover:bg-green-200 transition">
                    Contact
                </a>

            </div>
            <!-- Login en register rechts -->
            @guest
                <div class="absolute right-12 flex gap-4">
                    <a href="{{ route('login') }}"
                       class="bg-white text-green-600 px-5 py-2 rounded-full font-bold hover:bg-green-200 transition">
                        Login
                    </a>

                    <a href="{{ route('register') }}"
                       class="bg-white text-green-600 px-5 py-2 rounded-full font-bold hover:bg-green-200 transition">
                        Registreren
                    </a>
                </div>
            @else       
                <div class="absolute right-12 flex gap-4">
                    <a href="{{ route('afspraken.index') }}"
                       class="bg-white text-green-600 px-5 py-2 rounded-full font-bold hover:bg-green-50 transition">
                        Afspraak beheren
                    </a>
                    <form method="POST" action="{{ route('logout') }}">
                        @csrf
                        <button type="submit"
                                class="bg-white text-green-600 px-5 py-2 rounded-full font-bold hover:bg-green-50 transition">
                            Logout
                        </button>
                    </form>

            </div> 
            @endguest

        </div>
    </div>
</nav>

        <!-- Page Content -->
            <main>
                @yield('content')
            </main>

            <!-- Footer -->
            <footer class="bg-gray-800 text-white py-6 mt-12">
                <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
                    <p>&copy; {{ date('Y') }} FietsFix. All rights reserved.</p>

                </div>
            </footer>
        </div>
    </body>
</html>