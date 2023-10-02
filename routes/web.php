<?php

use App\Http\Controllers\CitaController;
use App\Http\Controllers\ConsultasController;
use App\Http\Controllers\ContactoController;
use App\Http\Controllers\EspecialistaController;
use App\Http\Controllers\EventoController;
use App\Http\Controllers\PacienteController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\PaqueteController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

/***
 * * RoutesPages
 */
Route::get('/',[PageController::class,'index'])->name('home');
Route::get('/events',[PageController::class,'eventosView'])->name('events');
Route::get('/events/{id}',[PageController::class,'showEvent'])->name('events.show');
Route::get('/packages',[PageController::class,'paquetesView'])->name('packages');
Route::get('/nosotros',[PageController::class,'nosotrosView'])->name('nosotros');
Route::get('/contact',[PageController::class,'contactoView'])->name('contact');
Route::post('/contact',[PageController::class,'store'])->name('contact.store');

Route::get('/login', function () {
    return view('login');
})->name('login')->middleware('guest');

// Route::get('/user',[UserController::class,'insert']);
Route::post('/login',[UserController::class,'store'])->name('login.store');
Route::post('/logout',[UserController::class,'destroy'])->name('login.destroy');

Route::get('/dashboard',function () {
    return view('admin.index');
})->name('menu')->middleware('auth');

// ? Rutas de citas
Route::get('/citas',[CitaController::class,'index'])->name('citas');
Route::get('/citas/create',[CitaController::class,'create'])->name('citas.create');
Route::post('/citas',[CitaController::class,'store'])->name('citas.store');
Route::get('/citas/edit/{id}',[CitaController::class,'edit'])->name('citas.edit');
Route::delete('/citas/{id}',[CitaController::class,'delete'])->name('citas.delete');
Route::patch('/citas/{id}',[CitaController::class,'update'])->name('citas.update');

// ? Rutas de consultas
Route::get('/consultas',[ConsultasController::class,'index'])->name('consultas');
Route::get('/consultas/create',[ConsultasController::class,'create'])->name('consultas.create');
Route::post('/consultas',[ConsultasController::class,'store'])->name('consultas.store');
Route::get('/consultas/edit/{id}',[ConsultasController::class,'edit'])->name('consultas.edit');
Route::delete('/consultas/{id}',[ConsultasController::class,'destroy'])->name('consultas.destroy');
Route::patch('/consultas/{id}',[ConsultasController::class,'update'])->name('consultas.update');

// ? Rutas de especialistas
Route::get('/especialistas',[EspecialistaController::class,'index'])->name('especialistas');
Route::get('/especialistas/create',[EspecialistaController::class,'create'])->name('especialistas.create');
Route::post('/especialistas',[EspecialistaController::class,'store'])->name('especialistas.store');
Route::get('/especialistas/edit/{id}',[EspecialistaController::class,'edit'])->name('especialistas.edit');
Route::patch('/especialistas/{id}',[EspecialistaController::class,'update'])->name('especialistas.update');

// ? Rutas de eventos
Route::get('/eventos',[EventoController::class,'index'])->name('eventos');
Route::get('/eventos/create',[EventoController::class,'create'])->name('eventos.create');
Route::post('/eventos',[EventoController::class,'store'])->name('eventos.store');
Route::get('/eventos/edit/{id}',[EventoController::class,'edit'])->name('eventos.edit');
Route::patch('/eventos/{id}',[EventoController::class,'update'])->name('eventos.update');
Route::delete('/eventos/{id}',[EventoController::class,'destroy'])->name('eventos.destroy');

// ? Rutas de correos
Route::get('/correos',[ContactoController::class,'index'])->name('correos');
Route::delete('/correos/{id}',[ContactoController::class,'destroy'])->name('correos.destroy');

// ? Rutas de pacientes
Route::get('/pacientes',[PacienteController::class,'index'])->name('pacientes');
Route::get('/pacientes/create',[PacienteController::class,'create'])->name('pacientes.create');
Route::post('/pacientes',[PacienteController::class,'store'])->name('pacientes.store');
Route::get('/pacientes/edit/{id}',[PacienteController::class,'edit'])->name('pacientes.edit');
Route::patch('/pacientes/{id}',[PacienteController::class,'update'])->name('pacientes.update');
Route::get('/pacientes/{id}',[PacienteController::class,'show'])->name('pacientes.show');

// ? Rutas de paquetes
Route::get('/paquetes',[PaqueteController::class,'index'])->name('paquetes');
Route::get('/paquetes/create',[PaqueteController::class,'create'])->name('paquetes.create');
Route::post('/paquetes',[PaqueteController::class,'store'])->name('paquetes.store');
Route::get('/paquetes/edit/{id}',[PaqueteController::class,'edit'])->name('paquetes.edit');
Route::patch('/paquetes/{id}',[PaqueteController::class,'update'])->name('paquetes.update');
Route::delete('/paquetes/{id}',[PaqueteController::class,'delete'])->name('paquetes.delete');


