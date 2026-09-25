<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\OrderController; // Se agrega esta línea arriba

Route::get('/', function () {
    return view('welcome');
});

// se cambia la ruta del owner por esta nueva sintaxis:
Route::get('/owner', [OrderController::class, 'getOwner']);