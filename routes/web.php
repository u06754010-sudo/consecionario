<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('inicio');
})->name('inicio');

Route::get('/autos', function () {

    $autos = [
        [
            'nombre' => 'Toyota Corolla',
            'precio' => '$80.000.000',
            'imagen' => 'https://via.placeholder.com/300x200'
        ],
        [
            'nombre' => 'Mazda CX-5',
            'precio' => '$120.000.000',
            'imagen' => 'https://via.placeholder.com/300x200'
        ],
        [
            'nombre' => 'Chevrolet Onix',
            'precio' => '$70.000.000',
            'imagen' => 'https://via.placeholder.com/300x200'
        ]
    ];

    return view('autos', compact('autos'));

})->name('autos');

Route::get('/nosotros', function () {
    return view('nosotros');
})->name('nosotros');

Route::get('/contacto', function () {
    return view('contacto');
})->name('contacto');

Route::middleware(['auth'])->group(function () {

    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');

    Route::get('/mensajes', function () {
    return view('mensajes');
})->name('mensajes');

});



Route::post('/autos', function () {
    return back()->with('success', 'Solicitud enviada correctamente');
})->name('autos.store');

require __DIR__.'/auth.php';