<?php

use Illuminate\Support\Facades\Route;
use RealRashid\SweetAlert\Facades\Alert;

Route::get('/', function () {
    Alert::success('Success Title', 'Success Message');
    return view('welcome');
});

/* Rutas para el controlador PeriodoController */
Route::resource('/periodo', 'PeriodoController');

/* Ruta para pantalla de Postulacion */
Route::get('/postulacion', function () {
    return view('postulacion');
});

Route::get('/periodo', function () {
    return view('periodo/creacion');
});

Route::get('/modPeriodo', function () {
    return view('periodo/modificacion');
});

Route::get('/estado', function () {
    return view('estado');
});

Route::get('/ficha', function () {
    return view('ficha');
});


