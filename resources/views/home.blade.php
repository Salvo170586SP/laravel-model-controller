<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My movie</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>

<body>
    <div class="container">
        <h1>Movie</h1>
        <div class="row">
            
            @forelse($movies as $movie)
                <div class="card col-5" style="width: 18rem;">
                    <div class="card-body">
                        <h5 class="card-title h2">Titolo: {{$movie->title}}</h5>
                        <h6 class="card-subtitle mb-2 text-muted h3">Titolo originale: {{ $movie->original_title }}</h6>
                        <p class="card-text">Nazione: {{ $movie->nationality }}</p>
                        <p class="card-text">Data di uscita: {{ $movie->date }}</p>
                        <p class="card-text">Voto: {{ $movie->vote }}</p>
                    </div>
                </div>
                @empty
                <h2>NON CI SONO MOVIE DISPONIBILI</h2>
                @endforelse
        </div>
    </div>
</body>

</html>