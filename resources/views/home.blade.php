<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Pacchetti Vacanza</title>
</head>
<body>
    <h1>Pacchetti Vacanza</h1>
    <ul>
        @foreach ($packages as $package)
        <li>
            <div>Nome: {{ $package->name }}</div>

            <div>Descrizione: {{ $package->descpription }}</div>

            <div>Prezzo: {{ $package->price }} €</div>

            <div>Hotel: {{ $package->hotel_name }}</div>

            <div>Stelle: {{ $package->hotel_stars }}</div>

            <div>Volo Andata: {{ $package->outbound_flight }}</div>

            <div>Volo Ritorno: {{ $package->return_flight }}</div>

        </li>
        @endforeach
    </ul>

</body>
</html>