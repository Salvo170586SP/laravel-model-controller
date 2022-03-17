@extends('layouts.main')

@section('content')
<div class="row">
                @forelse($movies as $movie)
                <div class="card col-4 border border-primary m-2" style="width: 18rem;">
                    <div class="card-body">
                        <div class="header-card mb-1" style="height: 75px;">
                            <h5 class="card-title ">{{$movie->title}}</h5>
                            <h6 class="card-subtitle border-bottom border-info mb-2 text-muted">{{ $movie->original_title }}</h6>
                        </div>
                        <p class="card-text"><span class="fw-bold">Nazione: </span> {{ $movie->nationality }}</p>
                        <p class="card-text"><span class="fw-bold">Data di uscita: </span> {{ $movie->date }}</p>
                        <p class="card-text"><span class="fw-bold">Voto: </span> {{ $movie->vote }}</p>
                        <a href="{{ route('movies.show', ['id'=> $movie->id]) }}">Scopri di più</a>
                    </div>
                </div>
                @empty
                <h2>NON CI SONO MOVIE DISPONIBILI</h2>
                @endforelse
            </div>

@endsection