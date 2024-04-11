<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;

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

    

});

Route::get('/products/create',[ProductController::class,'create'])->name('products.create');

Route::post('/products/store',[ProductController::class,'store'])->name('products.store');
Route::get('/products/index',[ProductController::class,'index'])->name('products.index');

