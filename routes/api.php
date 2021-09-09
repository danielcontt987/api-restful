<?php

use App\Http\Controllers\ArticuloController;
use App\Http\Controllers\ArticulosController;
use Illuminate\Support\Facades\Route;

Route::get('/articulos', [ArticuloController::class, 'index']); //mostrar todos los registros
Route::post('/articulos', [ArticuloController::class, 'store']); //crear un registro
Route::put('/articulos/{id}', [ArticuloController::class, 'update']); //actualizar un registro
Route::delete('/articulos/{id}', [ArticuloController::class, 'destroy']); //actualizar un registro