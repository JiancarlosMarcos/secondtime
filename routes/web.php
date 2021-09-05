<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\TiendaController;
use App\Http\Controllers\LoginController;
use Illuminate\Support\Facades\Route;



Route::get('/',[HomeController::class,'index'])->name('home');

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

Route::get('tienda',[TiendaController::class,'index'])->name('tienda');

// Route::get('registrarse', RegisterController::class);

// Route::get('iniciosession', LoginController::class);