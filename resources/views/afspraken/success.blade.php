

@extends('layouts.app')

@section('content')
    <main class="min-h-screen max-w-3xl mx-auto flex items-center justify-center">  
        <div class="rounded-2xl shadow-md p-10">   
            <section class="relative">
                 <img 
                    src="{{ asset('images/fietsfix.jpg') }}"
                    alt="FietsFix"
                    class="w-full h-[150px] object-cover"
                >  
                <div class="absolute inset-0 bg-black/40"></div>
            </section>           
            <h3 
                class="text-2xl font-bold text-gray-800 mb-2 mt-6"
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
        <tr class="hover:bg-gray-50">
            <td class="px-4 py-3">{{ $afspraken->naam }}</td>
            <td class="px-4 py-3">{{ $afspraken->email }}</td>
            <td class="px-4 py-3">{{ $afspraken->telefoonnummer }}</td>
            <td class="px-4 py-3">{{ $afspraken->fietstype }}</td>
            <td class="px-4 py-3">{{ $afspraken->fietsmerk }}</td>
            <td class="px-4 py-3">{{ $afspraken->probleem }}</td>
            <td class="px-4 py-3">{{ $afspraken->datum }}</td>
            <td class="px-4 py-3">{{ $afspraken->tijd }}</td>
        </tr>
    
</tbody>
</table>
    <br>
    <strong><p>Wij bellen u wanneer het klaar is.</p></strong>
        <div class="flex justify-end">
        <a href="\" 
           class="bg-green-600 text-white font-bold rounded-lg hover:bg-green-700 transition py-3 px-4">
            Terug
        </a>
        <form action="{{ route('afspraken.delete', $afspraken->id) }}" method="POST" class="ml-2">
            @csrf
            @method('DELETE')
            <button type="submit">
                Verwijderen
            </button>
        </div>
        
    
        
        </div>
        </main>

        @endsection
   