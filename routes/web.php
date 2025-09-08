<?php

use Illuminate\Support\Facades\Route;
use App\Models\Juguete;
use Illuminate\Support\Facades\Mail;
use App\Mail\JugueteMail;
use Illuminate\Http\Request;

Route::get('/', function () {
    return redirect()->route('Inicio');
});

Route::get('/Inicio', function () {
    return view('Inicio'); 
})->name('Inicio');

Route::get('/Catalogo', function () {
    $genero = session('genero');
    $juguetes = Juguete::where('genero', $genero)->get();
    return view('Catalogo', compact('juguetes'));
})->name('Catalogo');


Route::post('/guardar-usuario', function (\Illuminate\Http\Request $request) {
    session([
        'nombre' => $request->nombre,
        'email'  => $request->email,
        'genero' => $request->genero
    ]);
    return redirect('/Catalogo');
})->name('guardar.usuario');

Route::post('/enviar-juguete', function(Request $request) {
    $juguete = Juguete::find($request->juguete_id);
    $usuario = session('nombre');
    $email = session('email');

    Mail::to($email)->send(new JugueteMail($juguete));

    return back()->with('mensaje', "Se envió información de {$juguete->nombre} a {$usuario}");
})->name('enviar.juguete');
