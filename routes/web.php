<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\BiographieController;
use App\Http\Controllers\TarifController;
use App\Http\Controllers\PrestationController;

Route::get('/', function () {
    return view('welcome');
});

//route tarifs
Route::get('/tarifs', [TarifController::class, 'index'])->name('tarifs.index');
Route::delete('tarifs/{id}', [TarifController::class, 'destroy']);

//route prestations
Route::get('/prestations', [PrestationController::class, 'index'])->name('prestations.index');
Route::delete('prestations/{id}', [PrestationController::class, 'destroy']);

//route biographie
Route::get('/biographie', [BiographieController::class, 'index'])->name('biographie.index');
Route::delete('biographie', [BiographieController::class, 'destroy']);
