<?php

use Illuminate\Support\Facades\Route;
//use App\Http\Controllers/;

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

    Route::get('/form', function () {
        return view('form');
    })->name('form');

});
Route::post('/form/store', [App\Http\Controllers\FigureController::class, 'store'])->name('form.store');
Route::get('/collect', [App\Http\Controllers\FigureController::class, 'collect'])->name('collect');
Route::get('/form/{form}/delete', [App\Http\Controllers\FigureController::class, 'delete'])->name('form.delete');
Route::get('/form/{form}/edit', [App\Http\Controllers\FigureController::class, 'edit'])->name('form.edit');


//Route::get('/update', [App\Http\Controllers\FigureController::class, 'update'])->name('update');


