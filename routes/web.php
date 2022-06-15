<?php

use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\CarrerasController;
use App\Http\Controllers\UniversidadesController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use Illuminate\Validation\ValidationException;
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

Route::get('/', function () {
    return view('welcome');
})->name('/');


Route::get('/inicio',function(){
    return view('web.inicio');
})->name('incio');


Route::get('/universidad/{id}',[UniversidadesController::class,'infoUni'])->name('universidadInfo');

Route::get('/universidad/carrera/{id}',[CarrerasController::class,'infoCarrera'])->name('carrera');


