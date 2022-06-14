<?php

use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\UniversidadesController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use Illuminate\Validation\ValidationException;


//Vista del admin
Route::get('/admin',[UniversidadesController::class,'index'])->middleware('auth')->name('admin');

//Agregar Universidad
Route::get('/admin/universidad/crear',[UniversidadesController::class,'formularioCrear'])->middleware('auth')->name('universidad-crear');
Route::post('/admin/universidad/crear',[UniversidadesController::class,'store'])->middleware('auth');

//Eliminar Universidad
Route::delete('/admin/{universidad}',[UniversidadesController::class,'destroy'])->middleware('auth');

//Editar Universidad
Route::get('/admin/{id}/edit',[UniversidadesController::class,'edit'])->middleware('auth');
Route::patch('/admin/{id}',[UniversidadesController::class,'update'])->middleware('auth');


//Formulario Login
Route::get('/login',function(){
    return view('auth.login');
})->name('login')->middleware('guest');

// Login
Route::post('/login',[LoginController::class,'login']);
//Logout
Route::post('/logout',[LoginController::class,'logout']);

