<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

//ROTTA DELLA HOME CON LA LISTA DEI MOVIE
Route::get('/','MovieController@index')->name('home');
Route::get('/movie/{id}','MovieController@show')->name('movies.show');