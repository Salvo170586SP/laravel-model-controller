@extends('layouts.main')


@section('content')
    <h1>{{$movie->title}}</h1>
    <div class="card col border border-primary mt-5 ">
        <div class="card-body">
            <div class="header-card mb-1" style="height: 75px;">
                <h5 class="card-title ">{{$movie->title}}</h5>
                <h6 class="card-subtitle border-bottom border-info mb-2 text-muted">{{ $movie->original_title }}</h6>
            </div>
            <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Provident, magnam? Itaque quis veritatis sequi, ut odit beatae maxime error consequuntur adipisci velit nam explicabo minus nesciunt ad quod vitae excepturi?
            <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Provident, magnam? Itaque quis veritatis sequi, ut odit beatae maxime error consequuntur adipisci velit nam explicabo minus nesciunt ad quod vitae excepturi?
            <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Provident, magnam? Itaque quis veritatis sequi, ut odit beatae maxime error consequuntur adipisci velit nam explicabo minus nesciunt ad quod vitae excepturi?
            <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Provident, magnam? Itaque quis veritatis sequi, ut odit beatae maxime error consequuntur adipisci velit nam explicabo minus nesciunt ad quod vitae excepturi?
                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ea neque dolorem tempore debitis itaque perferendis soluta, aliquid sunt, quos molestiae quidem atque odit, nemo laborum ad iusto mollitia vitae cum.</p>
        </div>
    </div>

@endsection