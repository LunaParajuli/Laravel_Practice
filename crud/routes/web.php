<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Crud;

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

    Route::get('/crud', function () {
        return view('crud');
    })->name('crud');

});

Route::get('/cruds/index', [App\Http\Controllers\CrudController::class, 'index'])->name('cruds.index');
Route::get('/cruds/create', [App\Http\Controllers\CrudController::class, 'create'])->name('cruds.create');
Route::post('/cruds/store', [App\Http\Controllers\CrudController::class, 'store'])->name('cruds.store');
Route::get('/cruds/edit/{id}', [App\Http\Controllers\CrudController::class, 'edit'])->name('cruds.edit');

Route::post('/cruds/update/{id}', [App\Http\Controllers\CrudController::class, 'update'])->name('cruds.update');
Route::get('/cruds/delete/{id}', [App\Http\Controllers\CrudController::class, 'destroy'])->name('cruds.destroy');


