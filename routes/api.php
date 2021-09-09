<?php

use App\Http\Controllers\ArticulosController;
use Illuminate\Support\Facades\Route;

Route::get('/articulos', 'App\Http\Controllers\ArticuloController@index'); //mostrar todos los registros
Route::post('/articulos', 'App\Http\Controllers\ArticuloController@store'); //crear un registro
Route::put('/articulos/{id}', 'App\Http\Controllers\ArticuloController@update'); //actualizar un registro
Route::delete('/articulos/{id}', 'App\Http\Controllers\ArticuloController@destroy'); //actualizar un registro