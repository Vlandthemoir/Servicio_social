<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Talleres;


class VistasController extends Controller
{
  //////////////////////////////////////////////////////////////////////////////
  //vistas para el inicio
  public function create_home(){
    $eventos = DB::table('articulos')->select('titulo','fecha')
              ->where('Categoria','=','Eventos')->get();
    return view('Blog.home', compact('eventos'));
  }
  //////////////////////////////////////////////////////////////////////////////
  //vistas para los talleres
  public function create_verano(){
    $eventos = DB::table('articulos')->select('titulo','fecha')
              ->where('Categoria','=','Eventos')->get();
    $verano = DB::table('talleres')
                ->select('nombre','imagen','dias','horario','edades')
                ->where('tipo', '=', 'Verano')
                ->get();
    return view('Blog.verano', compact('verano','eventos'));
  }
  public function create_permanente(){
    $eventos = DB::table('articulos')->select('titulo','fecha')
              ->where('Categoria','=','Eventos')->get();
    $permanente = DB::table('talleres')
                ->select('nombre','imagen','dias','horario','edades')
                ->where('tipo', '=', 'Permanente')
                ->get();
    return view('Blog.permanentes', compact('permanente','eventos'));
  }
  //////////////////////////////////////////////////////////////////////////////
  //vistas para la galeria
  public function create_galeria(){
    $eventos = DB::table('articulos')->select('titulo','fecha')
              ->where('Categoria','=','Eventos')->get();
    $cantidad = DB::table('galeria')->count()/3;
    $medio = round($cantidad);

    $columna1 = DB::table('galeria')
                ->select('imagen','titulo')
                ->limit(intval($medio))
                ->get();

    $columna2 = DB::table('galeria')
                ->select('imagen','titulo')
                ->offset($medio)
                ->limit(intval($medio))
                ->get();
    $columna3 = DB::table('galeria')
                ->select('imagen','titulo')
                ->offset($medio*2)
                ->limit(intval($medio*2))
                ->get();
    return view('Blog.galeria', compact('columna1','columna2','columna3','eventos'));
  }
  public function create_imagen($nombre){
    $eventos = DB::table('articulos')->select('titulo','fecha')
              ->where('Categoria','=','Eventos')->get();
    $imagen = DB::table('galeria')
                ->select('titulo','imagen','fecha','autor','descripcion')
                ->where('titulo', '=', $nombre)
                ->get();
    return view('Blog.imagen' , compact('imagen','eventos'));
  }
  //////////////////////////////////////////////////////////////////////////////
  //vistas necesarias para los articulos
  public function create_articulos(){
    $eventos = DB::table('articulos')->select('titulo','fecha')
              ->where('Categoria','=','Eventos')->get();
    $articulos = DB::table('articulos')
                ->select('id','titulo','portada','fecha','categoria','resumen')
                ->get();
    return view('Blog.articulos' , compact('articulos','eventos'));
  }
  public function create_categoria($categoria){
    $eventos = DB::table('articulos')->select('titulo','fecha')
              ->where('Categoria','=','Eventos')->get();
    $articulos = DB::table('articulos')
                ->select('id','titulo','portada','fecha','categoria','resumen')
                ->where('categoria', '=', $categoria)
                ->get();
    return view('Blog.categoria' , compact('articulos','eventos'));
  }
  public function create_articulo($id){
    $eventos = DB::table('articulos')->select('titulo','fecha')
              ->where('Categoria','=','Eventos')->get();
    $articulo = DB::table('articulos')
                ->select('id','titulo','portada','fecha','categoria','cuerpo')
                ->where('id', '=', $id)
                ->get();
    return view('Blog.articulo' , compact('articulo','eventos'));
  }
  //////////////////////////////////////////////////////////////////////////////

}
