<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>afspraken success</title>
</head>
<body>
    <h2>Hier zijn de details van uw afspraak:</h2>

    
    <p>Naam: {{ $afspraken->naam }}</p>
    <p>Email: {{ $afspraken->email }}</p>  
    <p>Telefoonnummer: {{ $afspraken->telefoonnummer }}</p>
    <p>Fietstype: {{ $afspraken->fietstype }}</p>
    <p>Fietsmerk: {{ $afspraken->fietsmerk }}</p>
    <p>Probleem: {{ $afspraken->probleem }}</p>
    <p>Datum: {{ $afspraken->datum }}</p>   
    <p>Tijd: {{ $afspraken->tijd }}</p> 

    <strong><p>Zodra het klaar is, bellen wij u.</p></strong>

</body>
</html>