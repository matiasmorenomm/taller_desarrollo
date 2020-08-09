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

/* Ruta para el controlador BrigadistaController */
Route::resource('/brigadista', 'BrigadistaController');

/* Ruta para el controlador PostulacionController */
Route::resource('/postulacion', 'PostulacionController');

Route::get('/prueba', 'PostulacionController@getPostulantes');



Route::get('/estado', function () {
    return view('estado');
});

Route::get('/ficha', function () {
    return view('ficha');
});


