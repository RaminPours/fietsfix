<!DOCTYPE html>
<html lang="nl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>@yield('title')</title>

    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-white text-gray-800">

    <!-- NAVBAR -->
    <nav class="bg-green-600 text-white shadow-md">
    <div class="max-w-8xl mx-auto">
        <div class="h-20 flex items-center relative">

            <!-- Logo links -->
            <a href="/" class="absolute left-0">
                <img
                    src="{{ asset('images/fietsfix2.png') }}"
                    alt="FietsFix"
                    class="h-[100px]"
                >
            </a>

            <!-- Menu gecentreerd -->
            <div class="flex justify-center gap-8 text-center w-full">

                <a href="/fietssoorten"
                   class="bg-white text-green-600 rounded-full font-bold hover:bg-green-50 px-5 py-2 transition">
                    Fietssoorten
                </a>

                <a href="/fietsonderhoud"
                   class="bg-white text-green-600 rounded-full font-bold hover:bg-green-50 px-5 py-2 transition">
                    Fietsonderhoud
                </a>

                <a href="/contact"
                   class="bg-white text-green-600 px-5 py-2 rounded-full font-bold hover:bg-green-50 transition">
                    Contact
                </a>

            </div>

        </div>
    </div>
</nav>



    <!-- PAGINA INHOUD -->
    @yield('content')


    <!-- FOOTER -->
    <footer class="bg-green-600 text-white">
        <div class="max-w-8xl mx-auto px-6">
            <div class="min-h-60 flex items-center justify-between">

                <img
                        src="{{ asset('images/fietsfix2.png') }}"
                        alt="FietsFix"
                        class="h-[150px] w-auto"
                    >    
                <a href="">E-bikes</a>
                <a href="">Bakfietsen</a>
                

                <a href="/afspraken.contact">Klantenservice</a>
            </div>
        </div>
    </footer>

</body>
</html>