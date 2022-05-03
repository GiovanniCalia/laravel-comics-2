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
    $cards = config('comics');

    return view('guest.home', $cards);
})->name('home');


Route::get('/characters', function () {
    $cards = config('comics');

    return view('guest.characters', $cards);
})->name('characters');


Route::get('/characters/{id}', function ($id) {
    $cards = collect(config('comics2'));
    $selectedCard = $cards->firstwhere('id', $id);
    if ($selectedCard === null) abort(404);
    $data = [
        'selectedCard' => $selectedCard,
    ];

    return view('guest.character', $data);
})->name('character');
