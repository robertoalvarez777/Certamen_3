<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
//Route::view(ruta,nombreDeVistaSinBladePuntPhp)->name(nombreRutaQueSeUsaEnRoute);
Route::view("/","home")->name("home");
Route::view("/agregar_medida","agregar_medida")->name("agregar_medida");
Route::view("/ver_medida","ver_medida")->name("ver_medida");