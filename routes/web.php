<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\VistasController;

/*Route::get('/', function () {
    return view('Blog.home');
});*/

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
