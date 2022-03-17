<?php

namespace App\Http\Controllers;

use App\Movie;


class MovieController extends Controller
{
    //home di tutti i movies
    public function index(){

        $movies = Movie::all();

        //dump($movies);
        return view('home', compact('movies'));
    }


    //pagina del singolo movie
    public function show($id){

        $movie = Movie::find($id);

        return view('movies.show', compact('movie'));
    }

}
