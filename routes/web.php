<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\TiendaController;
use App\Http\Controllers\LoginController;
use Illuminate\Support\Facades\Route;

//###############  Home ###################

Route::get('/',[HomeController::class,'index'])->name('home');
Route::view('user/profile', 'tienda/profile')->name('portafolio');


//###############  Tienda ###################
Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

Route::get('tienda',[TiendaController::class,'index'])->name('tienda');

Route::get('tienda/{id}',[TiendaController::class,'show'])->name('tienda.show');

// Route::get('checkout/{id}',[TiendaController::class,'checkoutShow'])->name('checkout.show');

Route::middleware(['auth:sanctum', 'verified'])
    ->get('checkout/{id}',[TiendaController::class,'checkoutShow'])
    ->name('checkout.show');

//###############  Dashboard ###################

Route::middleware(['auth:sanctum', 'verified'])->get('dashboard/add-product', function () {
    return view('dashboard.add-product');
})->name('dashboard.add-product');

Route::middleware(['auth:sanctum', 'verified'])->get('dashboard/my-products', function () {
    return view('dashboard.my-products');
})->name('dashboard.my-products');