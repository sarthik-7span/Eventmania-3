<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('event-view');
})->name('event-view');

Route::get('/event-detail', function () {
    return view('event-detail');
})->name('event-detail');

Route::get('/artist', function () {
    return view('artist');
})->name('artist');
