<?php

use App\Http\Controllers\RecordController;
use Illuminate\Support\Facades\Route;

// Home page
Route::get('/', function () {
    return view('home');
})->name('home');

// Hall of Fame pages
Route::get('/hall-of-fame', function () {
    return view('hall-of-fame.index');
})->name('hall-of-fame.index');

// State champions pages
Route::get('/state-champions', function () {
    return view('state-champions');
})->name('state-champions');

// Record boards pages
Route::get('/records', function () {
    return view('records.index');
})->name('records.index');

//Record board categories Fall
Route::get('/records/football', function () {
    return view('records.football');
})->name('football');

Route::get('/records/soccer-boys', function () {
    return view('records.soccer-boys');
})->name('soccer-boys');

Route::get('/records/volleyball', function () {
    return view('records.volleyball');
})->name('volleyball');

//Record board categories Winter
Route::get('/records/basketball-boys', [RecordController::class, 'boysBasketball'])->name('basketball-boys');

Route::get('/records/basketball-girls', function () {
    return view('records.basketball-girls');
})->name('basketball-girls');

Route::get('/records/bowling', function () {
    return view('records.bowling');
})->name('bowling');

Route::get('/records/swimming', function () {
    return view('records.swimming');
})->name('swimming');

Route::get('/records/wrestling', function () {
    return view('records.wrestling');
})->name('wrestling');

Route::get('/records/scholarsbowl', function () {
    return view('records.scholarsbowl');
})->name('scholarsbowl');

//Record board categories Spring
Route::get('/records/baseball', function () {
    return view('records.baseball');
})->name('baseball');

Route::get('/records/golf-boys', function () {
    return view('records.golf-boys');
})->name('golf-boys');

Route::get('/records/soccer-girls', function () {
    return view('records.soccer-girls');
})->name('soccer-girls');

Route::get('/records/softball', function () {
    return view('records.softball');
})->name('softball');

Route::get('/records/track', function () {
    return view('records.track');
})->name('track');

// About page
Route::get('/about', function () {
    return view('about');
})->name('about');
