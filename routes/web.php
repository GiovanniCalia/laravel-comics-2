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
    $parametri = config('header&MainLinks');
    $cards = config('comics');

    return view('guest.home', $parametri, $cards);
})->name('home');


Route::get('/characters', function () {
    $parametri = config('header&MainLinks');
    $cards = config('comics');

    return view('guest.characters', $parametri, $cards,);
})->name('characters');


Route::get('/characters/{id}', function ($id) {
    //$parametri = config('header&MainLinks');
    $cards = collect(config('comics'));
    $selectedCard = $cards->firstwhere('id', $id);
    // if ($selectedCard === null) abort(404);

    return view('guest.character', [ 'cards' => $selectedCard]);
})->name('character');
