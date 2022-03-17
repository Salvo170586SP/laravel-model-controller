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
        <header>
            <h1>Movie</h1>
        </header>
        <main>
            <div class="row">
                @forelse($movies as $movie)
                <div class="card col-4 border border-primary m-2" style="width: 18rem;">
                    <div class="card-body">
                        <div class="header-card" style="height: 75px;">
                            <h5 class="card-title ">{{$movie->title}}</h5>
                            <h6 class="card-subtitle border-bottom border-info mb-2 text-muted">{{ $movie->original_title }}</h6>
                        </div>
                        <p class="card-text"><span>Nazione: </span> {{ $movie->nationality }}</p>
                        <p class="card-text"><span>Data di uscita: </span> {{ $movie->date }}</p>
                        <p class="card-text"><span>Voto: </span> {{ $movie->vote }}</p>
                        <a href="#">Scopri di più</a>
                    </div>
                </div>
                @empty
                <h2>NON CI SONO MOVIE DISPONIBILI</h2>
                @endforelse
            </div>
        </main>
    </div>
</body>

</html>