<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\VistasController;
use App\Http\Controllers\CmsController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\TalleresController;

/*rutas para el blog*/
Route::get('/',[VistasController::class,'create_home'])
->name('home.blog');
Route::get('/talleres-verano',[VistasController::class,'create_verano'])
->name('verano.blog');
Route::get('/talleres-permanente',[VistasController::class,'create_permanente'])
->name('permanente.blog');
Route::get('/galeria',[VistasController::class,'create_galeria'])
->name('galeria.blog');
Route::get('/imagen/{nombre}',[VistasController::class,'create_imagen'])
->name('imagen.blog');
Route::get('/calendario',[VistasController::class,'create_calendario'])
->name('calendario.blog');
Route::get('/articulo/{id}',[VistasController::class,'create_articulo'])
->name('articulo.blog');
Route::get('/articulos',[VistasController::class,'create_articulos'])
->name('articulos.blog');
Route::get('/articulos/categoria/{categoria}',[VistasController::class,'create_categoria'])
->name('categoria.blog');

/*rutas para el cms*/
Route::get('/login',[LoginController::class,'create'])
->name('login.index');
Route::post('/login',[LoginController::class,'store'])
->name('login.store');
Route::get('/logout',[LoginController::class,'destroy'])
->name('login.destroy');

Route::get('/cms/home',[CmsController::class,'create_home'])
->middleware('auth')
->name('home.cms');
/*Rutas para los talleres*/
Route::get('/cms/talleres', [TalleresController::class, 'index'])
->middleware('auth')
->name('talleres.cms');
Route::post('/cms/talleres-register', [TalleresController::class, 'store'])
->middleware('auth')
->name('talleres-create.cms');
Route::get('/cms/talleres-edit/{id}', [TalleresController::class, 'edit'])
->middleware('auth')
->name('talleres-edit.cms');
Route::put('/cms/talleres-update/{id}', [TalleresController::class, 'update'])
->middleware('auth')
->name('talleres-update.cms');
Route::delete('/cms/talleres-delete/{id}',[TalleresController::class,'destroy'])
->middleware('auth')
->name('talleres-delete.cms');
