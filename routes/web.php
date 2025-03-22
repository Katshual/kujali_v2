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
Route::get('tarifs/{tarif}/edit', [TarifController::class, 'edit'])->name('tarifs.edit');
Route::put('tarifs/{tarif}', [TarifController::class, 'update'])->name('tarifs.update');

//route prestations
Route::get('/prestations', [PrestationController::class, 'index'])->name('prestations.index');
Route::delete('prestations/{id}', [PrestationController::class, 'destroy']);
Route::get('prestations/{prestation}/edit', [PrestationController::class, 'edit'])->name('prestations.edit');
Route::put('prestations/{prestation}', [PrestationController::class, 'update'])->name('prestations.update');


//route biographie
Route::get('/biographie', [BiographieController::class, 'index'])->name('biographie.index');
Route::delete('biographie', [BiographieController::class, 'destroy']);
Route::get('biographie/{biographie}/edit', [BiographieController::class, 'edit'])->name('biographie.edit');
Route::put('biographie/{biographie}', [BiographieController::class, 'update'])->name('biographie.update');
