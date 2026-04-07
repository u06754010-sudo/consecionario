<?php

use Illuminate\Support\Facades\Route;

// Página principal
Route::get('/', function () {
    return view('inicio');
})->name('inicio');

// Otras páginas
Route::get('/nosotros', function () {
    return view('nosotros');
})->name('nosotros');

Route::get('/contacto', function () {
    return view('contacto');
})->name('contacto');

// AUTOS (SIN CONTROLADOR PARA QUE NO FALLE)
Route::get('/autos', function () {
    return view('autos', ['autos' => []]);
})->name('autos');

Route::post('/autos', function () {
    return redirect('/autos');
})->name('autos.store');