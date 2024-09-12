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

//route prestations
Route::get('/prestations', [PrestationController::class, 'index'])->name('prestations.index');

//route biographie
Route::get('/biographie', [BiographieController::class, 'index'])->name('biographie.index');
