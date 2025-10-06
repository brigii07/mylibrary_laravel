<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('login');
});

Route::get('/regisztracio', function () {
    return view('register');
})->name('regisztracio');

Route::get('/profile', function () {
    return view('profile');
})->name('profile');