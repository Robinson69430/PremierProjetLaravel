<?php

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





Route::get('/poissons', function() {
    // Aller chercher tous les poissons dans la base
    $poissons = poisson::all();
    // Envoyer ces poissons à une vue
    return view('index', [
        'poissons' => $poissons
    ]);
});

Route::get('/poissons/create', function() {
    return view('create');
});

Route::get('/poissons/{id}', function($id) {
    $poisson = poisson::findOrFail($id);
    return view('show', [
        'poisson' => $poisson
    ]);
});

Route::post('/poissons', function() {
    // Valider les données
    request()->validate([
        'name' => 'required|string|min:4|max:25',
        'price' => 'required|decimal:2',
        'picture' => 'nullable',
        'description' => 'required|string'
    ]);

    $s = new poisson;
    $s->name = request('name');
    $s->price = request('price')*100;
    $s->description = request('description');
    $s->picture = request('picture');
    $s->save();
    return redirect('/poissons/'.$s->id);
});