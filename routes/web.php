<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/Inicio', function () {
    return view('Inicio'); 
})->name('Inicio');

