<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('index');
})->name('index');

Route::get('/about_me', function () {
    return view('about_me.index');
})->name('about_me');
