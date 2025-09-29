<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/welcome', function () {
    return view('welcome');
});

Route::get('/home', function () {
    $username = 'Jean';

    return view('home', ['name' => $username]);
});

Route::get('/poissons', function () {
    return view('show');
});