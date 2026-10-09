@extends('layouts.app')

@section('title', 'FietsFix')

@section('content')
    <!-- KORTING -->
    <div class="bg-red-500 text-white text-center py-3">
        <p class="font-bold text-lg">
            🎉 Nieuwe klanten krijgen 20% korting!
        </p>
    </div>


    <!-- Over fietsfix -->
    <section class="relative">

        <img
            src="{{ asset('images/fietsfix.jpg') }}"
            alt="FietsFix"
            class="w-full h-[500px] object-cover"
        >

        <!-- Overlay -->
        <div class="absolute inset-0 bg-black/40"></div>

        <!-- Hero tekst -->
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
    <section class="bg-gray-50 py-20">

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

            @auth
                @include('afspraken.form')
            @else
                <div class="text-center">
                    <p class="mb-6">Log in of registreer je om een afspraak te maken en later in te zien.</p>
                    <a href="{{ route('afspraken.create') }}" class="inline-block rounded-lg bg-green-600 px-6 py-3 font-bold text-white hover:bg-green-700">Inloggen en afspraak maken</a>
                    <a href="{{ route('register') }}" class="inline-block px-6 py-3 font-bold text-green-700">Registreren</a>
                </div>
            @endauth

        </div>

    </section>

@endsection