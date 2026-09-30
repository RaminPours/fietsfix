<!DOCTYPE html>
<html lang="nl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>FietsFix</title>

    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-white text-gray-800">

    <!-- NAVBAR -->
    <nav class="bg-green-600 text-white shadow-md">
        <div class="max-w-7xl mx-auto px-6">
            <div class="h-20 flex items-center justify-between">

                <!-- Logo -->
                <a href="/" class="flex items-center gap-2">
                    
                    
                    <img 
                        src="{{ asset('images/fietsfix2.png') }}"
                        alt="FietsFix"
                        class="w-full h-[80px] object-cover ml-12"
                     >
                </a>

                <!-- Menu -->
                <div class="hidden md:flex items-center gap-8">

                    <a href="/fietssoorten"
                    class="bg-white text-green-600 rounded-full font-semibold hover:bg-green-50 px-5 py-2 transition">
                        Fietssoorten
                    </a>

                    <a href="/onderhoud"
                       class="bg-white text-green-600 rounded-full font-semibold hover:bg-green-50 px-5 py-2 transition">
                        Fietsonderhoud
                    </a>

                    <a href="/contact"
                       class="bg-white text-green-600 px-5 py-2 rounded-full
                              font-bold hover:bg-green-50 transition">
                        Contact
                    </a>

                </div>
            </div>
        </div>
    </nav>


    <!-- KORTING -->
    <div class="bg-red-500 text-white text-center py-3">
        <p class="font-bold text-lg">
            🎉 Nieuwe klanten krijgen 20% korting!
        </p>
    </div>


    <!-- HERO -->
    <section class="relative">

        <img 
            src="{{ asset('images/fietsfix.jpg') }}"
            alt="FietsFix"
            class="w-full h-[500px] object-cover"
        >

        <!-- Overlay -->
        <div class="absolute inset-0 bg-black/40"></div>

        <!-- Hero content -->
        <div class="absolute inset-0 flex items-center justify-center text-center px-6">

            <div class="text-white">

                <p class="text-lg md:text-xl mb-3">
                    Welkom bij FietsFix!
                </p>

                <h1 class="text-4xl md:text-6xl font-bold">
                    Jouw fiets, onze zorg.
                </h1>

                <p class="text-xl md:text-2xl mt-5">
                    Reparatie, onderhoud en onderdelen voor iedere fiets.
                </p>

                <a href="/fietsonderhoud"
                   class="inline-block mt-8 bg-green-600 hover:bg-green-700
                          px-8 py-4 rounded-full font-bold text-lg
                          transition shadow-lg">
                    Fietsonderhoud
                </a>

            </div>

        </div>

    </section>


    <!-- INTRODUCTIE -->
    <section class="max-w-6xl mx-auto px-6 py-20">

        <div class="grid md:grid-cols-2 gap-16 items-center">

            <!-- Tekst -->
            <div>

                <p class="text-green-600 font-bold uppercase tracking-wide mb-3">
                    FietsFix
                </p>

                <h2 class="text-4xl font-bold text-gray-900 mb-6">
                    Voor iedere fiets
                </h2>

                <p class="text-lg leading-relaxed text-gray-600">
                    Wil jij je fiets laten repareren of is je fiets aan een
                    onderhoudsbeurt of nieuwe fietsbanden toe?
                </p>

                <p class="text-lg leading-relaxed text-gray-600 mt-4">
                    Je kunt met elk merk fiets bij ons terecht. Van e-bikes
                    en stadsfietsen tot bakfietsen, cargo bikes en fatbikes.
                </p>

                <p class="text-lg leading-relaxed text-gray-600 mt-4">
                    Bekijk onze prijzen en plan eenvoudig online een afspraak.
                </p>
            </div>

            <!-- Beoordeling -->
            <div class="flex justify-center">

                <div class="bg-gray-50 rounded-3xl p-10 text-center
                            shadow-sm border border-gray-100 w-full max-w-sm">

                    <p class="text-gray-500 font-medium">
                        Onze klanten geven ons
                    </p>

                    <div class="text-yellow-400 text-4xl tracking-wide mt-3">
                        ★★★★★
                    </div>

                    <p class="text-5xl font-bold text-gray-900 mt-3">
                        4.9
                    </p>

                    <p class="text-gray-500 mt-2">
                        uit 5 sterren
                    </p>

                    <div class="w-16 h-1 bg-green-600 mx-auto my-6 rounded-full"></div>

                    <p class="text-gray-600">
                        Gebaseerd op 127 beoordelingen
                    </p>

                    <a href="#reviews"
                       class="inline-block mt-5 text-green-600
                              font-semibold hover:underline">
                        Bekijk onze reviews →
                    </a>

                </div>

            </div>

        </div>

    </section>


    <!-- AFSPRAAK -->
    <section id="afspraak" class="bg-gray-50 py-20">

        <div class="max-w-6xl mx-auto px-6">

            <div class="text-center mb-12">

                <p class="text-green-600 font-bold uppercase tracking-wide">
                    Online afspraak
                </p>

                <h2 class="text-4xl font-bold text-gray-900 mt-2">
                    Plan je afspraak
                </h2>

                <p class="text-gray-600 text-lg mt-4">
                    Kies een moment dat jou uitkomt.
                </p>

            </div>

            @include('afspraken.create')

        </div>

    </section>

    <footer class="bg-green-600 text-white shadow-md">
        <div class="max-w-7xl mx-auto px-6">
            <div class="h-60 flex items-center justify-between">
                <p>E-bike onderhoud</p>
                <p>klantenservice</p>
            </div>
        </div>

    </footer>

</body>
</html>
