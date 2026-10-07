@extends('layouts.app')

@section('content')

<section class="relative">

        <img
            src="{{ asset('images/fietsrep.jpg') }}"
            alt="FietsFix"
            class="w-full h-[500px] object-cover"
        >

        <!-- Overlay -->
        <div class="absolute inset-0 bg-black/40"></div>

        <!-- Hero tekst -->
        <div class="absolute inset-0 flex items-center justify-center text-center px-6">

            <div class="text-white">

                <p class="text-4xl md:text-6xl font-bold">
                    Fietsonderhoud
                </p>

            </div>

        </div>

    </section>

     <!-- ANWB PAS -->
    <div class="bg-red-500 text-white text-center py-3">
        <p class="font-bold text-lg">
            🎉 Voordeel met je ANWB ledenpas!
        </p>
    </div>

    <h1 class="text-1xl text-gray-900 mt-8 max-w-3xl">
       Wil je een onderhoudsbeurt aan je elektrische fiets, stadsfiets of bakfiets laten uitvoeren? Wij controleren jouw fiets op de belangrijkste onderdelen en dat voor een vaste prijs. Bekijk de onderhoudsprijzen voor jouw fiets en maak eenvoudig online een afspraak op een moment dat het voor jou het beste uitkomst.
    </h1>
    <br>
    <h1 class="text-1xl text-gray-900 mt-8 max-w-3xl">
       <strong>Onderhoudsbeurt e-bike of stadsfiets</strong><br>

        Regelmatig onderhoud aan je elektrische fiets, stadsfiets of bakfiets zorgt er voor je fiets in een goede conditie blijft. Ook voorkomt dit reparaties in de toekomst. Een gesmeerde ketting gaat veel langer mee dan een droge of roestige ketting. Als je spaken bijvoorbeeld los zitten, dan worden deze aangedraaid. Hiermee voorkom je kapotte spaken of een slag in je wiel. Een klein rateltje in je fiets of doortrappen door slecht afgestelde versnellingen kan in de toekomst voor grotere problemen zorgen. Tijdens een onderhoudsbeurt aan je e-bike of stadsfiets worden onder andere deze zaken daarom uitvoerig geïnspecteerd.
    </h1>
    

    


@endsection