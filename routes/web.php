<?php

use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return Inertia::render('Dashboard', ['title'  => "Olá mundo"]);
});
Route::get('/mesas', function () {
    return Inertia::render('Mesas/Lista', ['title'  => "Lista de mesas"]);
});
