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

Route::get('/', function () {

    $data =config('comics');



    return view('home', ['comics'=>$data]);
})->name('home');


Route::get('/comics', function () {
    return view('comic');
})->name('comic');


Route::get('/characters', function () {
    return view('characters');
})->name('characters');


Route::get('/collectiobles', function () {
    return view('collectiobles');
})->name('collectiobles');


Route::get('/fans', function () {
    return view('fans');
})->name('fans');


Route::get('/game', function () {
    return view('game');
})->name('game');


Route::get('/movie', function () {
    return view('movie');
})->name('movie');


Route::get('/news', function () {
    return view('news');
})->name('news');


Route::get('/shop', function () {
    return view('shop');
})->name('shop');


Route::get('/tv', function () {
    return view('tv');
})->name('tv');


Route::get('/videos', function () {
    return view('videos');
})->name('videos');
