<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ClientController;


Route::get('/', function () {
    return view('welcome');
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');

    Route::get('/products', function () {
        return view('products');
    })->name('products');
});

Route::get('/products/index', [App\Http\Controllers\ClientController::class, 'index'])->name('products.index');

Route::get('/products/create', [App\Http\Controllers\ClientController::class, 'create'])->name('products.create');


 Route::post('/products/store', [App\Http\Controllers\ClientController::class, 'store'])->name('products.store');

 Route::get('/products/edit/{id}', [App\Http\Controllers\ClientController::class, 'edit'])->name('products.edit');

  Route::post('/products/update/{id}', [App\Http\Controllers\ClientController::class, 'update'])->name('products.update');


  Route::get('/products/delete/{id}', [App\Http\Controllers\ClientController::class, 'destroy'])->name('products.destroy');
