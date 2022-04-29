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


Route::get('/character', function () {
    $parametri = config('header&MainLinks');
    $cards = config('comics');

    return view('guest.character', $parametri, $cards,);
})->name('character');


