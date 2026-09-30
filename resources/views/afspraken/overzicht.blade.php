<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>afspraken overzicht</title>
</head>
<body>

    <h1>Overzicht Afspraken</h1>

    <table border="1" cellspacing="0" cellpadding="10">
        <thead>
            <tr>
                <th>Naam</th>
                <th>Email</th>
                <th>Telefoonnummer</th>
                <th>Fietstype</th>
                <th>Fietsmerk</th>
                <th>Probleem</th>
                <th>Datum</th>
                <th>Tijd</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($afspraken as $afspraak)
               <tr>
                   <td>{{ $afspraak->naam }}</td>
                   <td>{{ $afspraak->email }}</td>
                   <td>{{ $afspraak->telefoonnummer }}</td>
                   <td>{{ $afspraak->fietstype }}</td>
                   <td>{{ $afspraak->fietsmerk }}</td>
                   <td>{{ $afspraak->probleem }}</td>
                   <td>{{ $afspraak->datum }}</td>
                   <td>{{ $afspraak->tijd }}</td>
               </tr>
            @endforeach
        </tbody>
    
</body>
</html>