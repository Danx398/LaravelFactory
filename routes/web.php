<?php

use App\Http\Controllers\Distribuciones;
use App\Http\Controllers\Personal;
use App\Http\Controllers\Productos;
use Illuminate\Support\Facades\Route;

Route::get('/',[Productos::class,'index']);
Route::get('/personal',[Personal::class,'index']);
Route::get('/distribuciones',[Distribuciones::class,'index']);