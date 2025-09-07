<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return redirect()->route('Inicio');
});

Route::get('/Inicio', function () {
    return view('Inicio'); 
})->name('Inicio');

Route::get('/Catalogo', function () {
    return view('Catalogo');
})->name('Catalogo');


Route::post('/guardar-usuario', function (\Illuminate\Http\Request $request) {
    session([
        'nombre' => $request->nombre,
        'email'  => $request->email,
        'genero' => $request->genero
    ]);
    return redirect('/Catalogo');
})->name('guardar.usuario');
