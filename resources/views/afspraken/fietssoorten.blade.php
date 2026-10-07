@extends('layouts.app')

@section('content')

<section class="relative">

        <img
            src="{{ asset('images/e-bike.jpg') }}"
            alt="FietsFix"
            class="w-full h-[500px] object-cover"
        >

        <!-- Overlay -->
        <div class="absolute inset-0 bg-black/40"></div>

        <!-- Hero tekst -->
        <div class="absolute inset-0 flex items-center justify-center text-center px-6">

            <div class="text-white">

                <p class="text-4xl md:text-6xl font-bold">
                    Fietssoorten
                </p>

            </div>

        </div>

    </section>
     <!-- KORTING -->
    <div class="bg-red-500 text-white text-center py-3">
        <p class="font-bold text-lg">
            🎉 Nu, alle E-bikes 10% korting!
        </p>
    </div>

    <h1 class="text-center text-green-700 text-3xl font-bold mt-8 underline decoration-double">
        Alle fietsmerken en -soorten zijn welkom
    </h1>
     <!-- INTRODUCTIE -->
    <section class="max-w-7xl mx-auto px-6 py-20">

    <div class="grid md:grid-cols-3 gap-8">

        <!-- Fietsmerken -->
        <div class="bg-gray-50 rounded-3xl p-10 border shadow-lg border-gray-100">

            <p class="text-green-600 font-bold uppercase tracking-wide text-sm mb-3">
                E-bike onderhoud voor alle elektrische fietsen
            </p>

            <h2 class="text-2xl font-bold text-gray-900 mb-4">
                Fietsmerken
            </h2>

            <p class="text-gray-600 mb-8 leading-relaxed">
                Dit zijn een aantal fietsmerken waarvoor wij onderhoud uitvoeren:
            </p>

            <div class="space-y-3">
                <div class="flex items-center text-lg text-gray-800">
                    <span class="text-green-600 text-2xl mr-3">›</span>
                    Batavus
                </div>

                <div class="flex items-center text-lg text-gray-800">
                    <span class="text-green-600 text-2xl mr-3">›</span>
                    Giant
                </div>

                <div class="flex items-center text-lg text-gray-800">
                    <span class="text-green-600 text-2xl mr-3">›</span>
                    Gazelle
                </div>

                <div class="flex items-center text-lg text-gray-800">
                    <span class="text-green-600 text-2xl mr-3">›</span>
                    Sparta
                </div>

                <div class="flex items-center text-lg text-gray-800">
                    <span class="text-green-600 text-2xl mr-3">›</span>
                    Stella
                </div>

                <div class="flex items-center text-lg text-gray-800">
                    <span class="text-green-600 text-2xl mr-3">›</span>
                    Cortina
                </div>
            </div>

        </div>


        <!-- Checks -->
        <div class="bg-gray-50 rounded-3xl p-10 shadow-sm border border-gray-100">

            <p class="text-green-600 font-bold uppercase tracking-wide text-sm mb-3">
                FietsFix service
            </p>

            <h2 class="text-2xl font-bold text-gray-900 mb-8">
                E-bike service bij FietsFix
            </h2>

            <div class="space-y-5">

                <div class="flex items-start gap-3">
                    <span class="text-green-600 font-bold text-xl">✓</span>
                    <p class="text-gray-700">
                        Eenvoudig online je afspraak plannen
                    </p>
                </div>

                <div class="flex items-start gap-3">
                    <span class="text-green-600 font-bold text-xl">✓</span>
                    <p class="text-gray-700">
                        Fietsbandenservice: klaar terwijl je wacht, binnen 1 uur
                    </p>
                </div>

                <div class="flex items-start gap-3">
                    <span class="text-green-600 font-bold text-xl">✓</span>
                    <p class="text-gray-700">
                        Voor alle merken e-bikes en stadsfietsen
                    </p>
                </div>

                <div class="flex items-start gap-3">
                    <span class="text-green-600 font-bold text-xl">✓</span>
                    <p class="text-gray-700">
                        Vaste prijzen, geen verrassingen achteraf
                    </p>
                </div>

                <div class="flex items-start gap-3">
                    <span class="text-green-600 font-bold text-xl">✓</span>
                    <p class="text-gray-700">
                        Vakkundige, gediplomeerde fietsenmakers
                    </p>
                </div>

            </div>

        </div>


        <!-- Afbeelding -->
        <div class="relative min-h-[500px] overflow-hidden rounded-3xl shadow-sm">

            <img
            
                src="{{ asset('images/e-bike2.jpg') }}"
                alt="E-bike onderhoud bij FietsFix"
                class="absolute inset-0 w-full h-full object-cover"
            >
           
        </div>

    </div>

</section>


@endsection