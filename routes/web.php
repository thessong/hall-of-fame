<?php

use Illuminate\Support\Facades\Route;

// Home page
Route::get('/', function () {
    return view('home');
})->name('home');

// Hall of Fame pages
Route::get('/hall-of-fame', function () {
    return view('hall-of-fame.index');
})->name('hall-of-fame.index');

// Record boards pages
Route::get('/records', function () {
    return view('records.index');
})->name('records.index');

// About page
Route::get('/about', function () {
    return view('about');
})->name('about');
