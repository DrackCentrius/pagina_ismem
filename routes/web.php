<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ClienteController;
use App\Http\Controllers\CiudadController;
use App\Http\Controllers\DistritoController;
use App\Http\Controllers\PaisController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::resource('cliente',ClienteController::class);
Route::resource('ciudad',CiudadController::class);
Route::resource('distrito',DistritoController::class);
Route::resource('pais',PaisController::class);
require __DIR__.'/auth.php';
