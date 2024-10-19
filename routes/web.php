<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EncryptController;
use App\Http\Controllers\SumaController;

Route::get('/', function () {
    return view('home');
});

Route::post('/encriptar', [EncryptController::class, 'encriptar']);

Route::post('/sumar', [SumaController::class, 'sumar']);
