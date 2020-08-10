<?php

use Illuminate\Support\Facades\Route;
use RealRashid\SweetAlert\Facades\Alert;

Route::get('/', function () {
    Alert::success('Success Title', 'Success Message');
    return view('welcome');
});


