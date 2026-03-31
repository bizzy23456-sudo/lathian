<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('beranda');
});

Route::get('/berita', function () {
    return view('berita');
});

Route::get('/profile', function () {
    return view('profile');
});