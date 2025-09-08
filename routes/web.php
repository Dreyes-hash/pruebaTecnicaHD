<?php

use Illuminate\Support\Facades\Route;
use App\Models\Juguete;
use Illuminate\Support\Facades\Mail;
use App\Mail\JugueteMail;
use Illuminate\Http\Request;

// Redirigir a la página de inicio
Route::get('/', function () {
    return redirect()->route('Inicio');
});


// Página de inicio
Route::get('/Inicio', function () {
    return view('Inicio'); 
})->name('Inicio');


// Página de catálogo
Route::get('/Catalogo', function () {
    // Recuperar la sesión
    $genero = session('genero');
    $juguetes = Juguete::where('genero', $genero)->get();
    return view('Catalogo', compact('juguetes'));
})->name('Catalogo');


Route::post('/guardar-usuario', function (\Illuminate\Http\Request $request) {
    //guardar la información del usuario en la sesión
    session([
        'nombre' => $request->nombre,
        'email'  => $request->email,
        'genero' => $request->genero
    ]);
    return redirect('/Catalogo');
})->name('guardar.usuario');

// Enviar información del juguete
Route::post('/enviar-juguete', function(Request $request) {
    $juguete = Juguete::find($request->juguete_id);
    $usuario = session('nombre');
    $email = session('email');

    Mail::to($email)->send(new JugueteMail($juguete));

    return back()->with('mensaje', "Se envió información de {$juguete->nombre} a {$usuario}");
})->name('enviar.juguete');
