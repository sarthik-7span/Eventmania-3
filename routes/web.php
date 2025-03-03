<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home'); // Replace 'welcome' with the actual view you want to display for the home page.
})->name('home');
