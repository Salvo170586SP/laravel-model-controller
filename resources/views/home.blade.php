<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My movie</title>
</head>

<body>
    <h1>Movie</h1>

    @forelse($movies as $movie)
    <div class="card" style="width: 18rem;">
        <div class="card-body">
            <h5 class="card-title h2">{{$movie->title}}</h5>
            <h6 class="card-subtitle mb-2 text-muted h3">{{ $movie->original_title }}</h6>
            <p class="card-text">{{ $movie->nationality }}</p>
            <p class="card-text">{{ $movie->date }}</p>
            <p class="card-text">{{ $movie->vote }}</p>
        </div>
    </div>
    @empty
    <h2>NON CI SONO MOVIE DISPONIBILI</h2>
    @endforelse
</body>

</html>