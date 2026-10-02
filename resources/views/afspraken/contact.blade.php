@extends('layouts.app')

@section('content')
     <section class="relative">

        <img 
            src="{{ asset('images/image.png') }}"
            alt="FietsFix"
            class="w-full h-[500px] object-cover"
        >
        <div class="absolute inset-0 bg-black/40"></div>

        <div class="absolute inset-0 flex items-center justify-center text-center px-6">

            <div class="text-white">

                <p class="text-4xl md:text-6xl font-bold">
                    Onze klantenservice
                </p>

            </div>

        </div>

    </section>

     <section class="max-w-6xl mx-auto px-6 py-20">

        <div class="grid md:grid-cols-2 gap-16 items-center">

            <!-- Tekst -->
            <div>

                <p class="text-green-600 font-bold uppercase tracking-wide mb-3">
                    FietsFix
                </p>

                <h2 class="text-4xl font-bold text-gray-900 mb-6">
                    Waar kunnen wij je mee helpen?
                </h2>

                <p class="text-lg leading-relaxed text-gray-600">

                Welkom bij de online klantenservice van Fietsfix. Je kunt bij ons terecht met je vragen, reacties, complimenten of klachten. In onze veelgestelde vragen kun je zien of een vraag al eerder is gesteld. Liever contact opnemen? Wij helpen je graag met service waar je blij van wordt!
                </p>
            </div>

            <div class="flex justify-center">

                <div class="bg-gray-50 rounded-3xl p-10
                            shadow-sm border border-gray-100 w-full max-w-sm">

                    <p class="text-gray-500 font-medium">
                       > Vragen?
                    </p>

                    <p class="font-bold text-gray-900 mt-3">
                       > 24/7 chat (knop rechtsonderin) Direct antwoord op elk moment
                    </p>

                    <p class="text-gray-500 mt-2">
                       > Bel 088282828282(lokaal tarief)
                         bereikbaar ma-vr 08::00-17:00
                    </p>

                    <p class="text-gray-600">
                       > mail klanten@fietsfix.nl
                    </p>

                    <div class="w-20 h-1 bg-green-600 mx-auto my-6 rounded-full text-center">Bereikbaar</div>

                </div>

            </div>

        </div>

    </section>
@endsection