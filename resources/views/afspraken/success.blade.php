

@extends('layouts.app')

@section('content')
    <main class="min-h-screen max-w-3xl mx-auto flex items-center justify-center">  
        <div class="bg-white rounded-2xl shadow-md p-8"> 
            <img 
                src="{{ asset('images/fietsfix2.png') }}"
                alt="FietsFix"
                class="h-96 w-full"
             >
            <h3 
                class="text-2xl font-bold text-gray-800 mb-2"
                >Hier zijn de details van uw afspraak bij FietsFix!  
            </h3>

        <table class="text-left border-2 border-separate border-spacing w-full">
        <thead class="text-white uppercase text-xs bg-gray-600">
        <tr>
            <th class="px-4 py-3">Naam</th>
            <th class="px-4 py-3">Email</th>
            <th class="px-4 py-3">Telefoonnummer</th>
            <th class="px-4 py-3">Fietstype</th>
            <th class="px-4 py-3">Fietsmerk</th>
            <th class="px-4 py-3">Probleem</th>
            <th class="px-4 py-3">Datum</th>
            <th class="px-4 py-3">Tijd</th>
        </tr>
        </thead>

<tbody>
    @foreach ($afspraken as $afspraak)
        <tr class="border-b hover:bg-gray-50">
            <td class="px-4 py-3">{{ $afspraak->naam }}</td>
            <td class="px-4 py-3">{{ $afspraak->email }}</td>
            <td class="px-4 py-3">{{ $afspraak->telefoonnummer }}</td>
            <td class="px-4 py-3">{{ $afspraak->fietstype }}</td>
            <td class="px-4 py-3">{{ $afspraak->fietsmerk }}</td>
            <td class="px-4 py-3">{{ $afspraak->probleem }}</td>
            <td class="px-4 py-3">{{ $afspraak->datum }}</td>
            <td class="px-4 py-3">{{ $afspraak->tijd }}</td>
        </tr>
    @endforeach
</tbody>
</table>

        <br>
        
        <strong><p>Zodra het klaar is, dan bellen wij u!</p></strong>
        <br>
        <a href="\" 
           class="w-full bg-green-600 text-white font-bold rounded-lg hover:bg-green-700 transition py-3 px-4">
            Terug
        </a>
        </div>
        </main>
        @endsection
   