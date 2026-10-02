<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
     <script src="https://cdn.tailwindcss.com"></script>
    <title>afspraken overzicht</title>
</head>
<body>

<div class="min-h-screen flex items-center justify-center bg-white">
<div class="bg-white rounded-2xl shadow-md p-8 w-full max-w-6xl">

    <h1 class="text-2xl font-bold text-gray-800 mb-6 text-center">
        Overzicht Afspraken
    </h1>

<div class="overflow-x-auto">
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
</div>

    </div>
</div>
    
</body>
</html>