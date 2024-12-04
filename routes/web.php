<?php

use Illuminate\Support\Facades\Route;
// Ruta para la página principal (Inicio)
Route::get('/', function () {
    return view('inicio');
});
// Ruta para la sección de personajes
Route::get('/personajes', function () {
    return view('personajes');
});
// Ruta para la sección de figuras
Route::get('/figuras', function () {
    return view('figuras');
});
// Ruta para la galería
Route::get('/galeria', function () {
    return view('galeria');
});
