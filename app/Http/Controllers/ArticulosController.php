<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Articulos;
class ArticulosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $datos = Articulos::orderBy('id', 'asc')->get();
      return view('Cms.Articulos.view', compact('datos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      $articulos = new Articulos();
      $articulos->titulo = $request->post('titulo');
      $articulos->portada = $request->post('portada');
      $articulos->fecha = $request->post('fecha');
      $articulos->categoria = $request->post('categoria');
      $articulos->resumen = $request->post('resumen');
      $articulos->cuerpo = $request->post('cuerpo');
      $articulos->save();
      return redirect()->route("articulos.cms");
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
      $articulos = Articulos::findOrFail($id);
      return view("Cms.Articulos.update" , compact('articulos'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
      $articulos = Articulos::find($id);
      $articulos->titulo = $request->input('titulo');
      $articulos->portada = $request->input('portada');
      $articulos->fecha = $request->input('fecha');
      $articulos->categoria = $request->input('categoria');
      $articulos->resumen = $request->input('resumen');
      $articulos->cuerpo = $request->input('cuerpo');
      $articulos->save();
      return redirect()->route("articulos.cms");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
      $articulos = Articulos::find($id);
    	$articulos->delete();
      return redirect()->route("articulos.cms");
    }
}
