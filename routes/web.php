<?php

use App\Http\Controllers\poissonControler;
use App\Models\poisson;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('welcome', function () {
    return view('welcome');
});



Route::get('home', function () {
    $username = 'Jeanne';
    $password = "azerty";
    return view('home', [
        'name' => $username,
        'password' => $password
    ]);
});





Route::get('/poissons',  [poissonControler::class, 'index']);
Route::get('/poissons/create', [poissonControler::class, 'create']);
Route::get('/poissons/{id}', [poissonControler::class, 'show']);
Route::post('/poissons', [poissonControler::class, 'store']);
Route::get('/poissons/{id}/edit', [poissonControler::class, 'edit']);
Route::patch('/poissons/{id}', [poissonControler::class, 'update']);
Route::delete('/poissons/{id}', [poissonControler::class, 'destroy']);