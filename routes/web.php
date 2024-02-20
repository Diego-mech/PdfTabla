<?php

use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('welcome');
});
Auth::routes();

Route::get('/products/pdf', [\App\Http\Controllers\ProductController::class, 'pdf'])->name('products.pdf');
Route::get('/home', [\App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::resource('/products', App\Http\Controllers\ProductController::class);
