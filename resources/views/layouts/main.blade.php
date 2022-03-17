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
    <header class="bg-secondary text-white my5">
        <div class="container">
            <a class="btn text-white" href="{{ url('/') }}">
                <h1>Movie</h1>
            </a>
        </div>
    </header>
    <main>
        <div class="container">
            @yield('content')
        </div>
    </main>
</body>

</html>