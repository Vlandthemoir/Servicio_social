<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Talleres;


class VistasController extends Controller
{
  //arreglar esto hacer que los datos se traigan directamente desde el modelo 
  //aqui declaro las vistas y paso parametros de la base de datos a estas
  //////////////////////////////////////////////////////////////////////////////
  //vistas para el inicio
  public function create_home(){
    return view('Blog.home');
  }
  //////////////////////////////////////////////////////////////////////////////
  //vistas para los talleres
  public function create_verano(){
    $verano = DB::table('talleres')
                ->select('nombre','imagen','dias','horario','edades')
                ->where('tipo', '=', 'Verano')
                ->get();
    /*$cantidad = DB::table('talleres')
                ->select('nombre','imagen','dias','horario','edades')
                ->where('tipo', '=', 'Verano')
                ->count();
    $verano = Talleres::orderBy('id', 'desc')->paginate($cantidad);*/
    return view('Blog.verano', compact('verano'));
  }
  public function create_permanente(){
    $permanente = DB::table('talleres')
                ->select('nombre','imagen','dias','horario','edades')
                ->where('tipo', '=', 'Permanente')
                ->get();
    /*$cantidad = DB::table('talleres')
                ->select('nombre','imagen','dias','horario','edades')
                ->where('tipo', '=', 'Permanente')
                ->count();
    $permanente = Talleres::orderBy('id', 'desc')->paginate($cantidad);*/
    return view('Blog.permanentes', compact('permanente'));
  }
  //////////////////////////////////////////////////////////////////////////////
  //vistas para la galeria
  public function create_galeria(){
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
    return view('Blog.galeria', compact('columna1','columna2','columna3'));
  }
  public function create_imagen($nombre){
    $imagen = DB::table('galeria')
                ->select('titulo','imagen','fecha','autor','descripcion')
                ->where('titulo', '=', $nombre)
                ->get();
    return view('Blog.imagen' , compact('imagen'));
  }
  //////////////////////////////////////////////////////////////////////////////
  //vistas necesarias para los articulos
  public function create_articulos(){
    $articulos = DB::table('articulos')
                ->select('id','titulo','portada','fecha','categoria','resumen')
                ->get();
    return view('Blog.articulos' , compact('articulos'));
  }
  public function create_categoria($categoria){
    $articulos = DB::table('articulos')
                ->select('id','titulo','portada','fecha','categoria','resumen')
                ->where('categoria', '=', $categoria)
                ->get();
    return view('Blog.categoria' , compact('articulos'));
  }
  public function create_articulo($id){
    $articulo = DB::table('articulos')
                ->select('id','titulo','portada','fecha','categoria','cuerpo')
                ->where('id', '=', $id)
                ->get();
    return view('Blog.articulo' , compact('articulo'));
  }
  //////////////////////////////////////////////////////////////////////////////

}
