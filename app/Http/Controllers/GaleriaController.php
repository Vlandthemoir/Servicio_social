<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Galeria;
class GaleriaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $datos = Galeria::orderBy('id', 'asc')->get();
	    return view('Cms.Galeria.view', compact('datos'));
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
      $galeria = new Galeria();
      $galeria->titulo = $request->post('titulo');
      $galeria->imagen = $request->post('imagen');
      $galeria->fecha = $request->post('fecha');
      $galeria->autor = $request->post('autor');
      $galeria->descripcion = $request->post('descripcion');
      $galeria->save();
      return redirect()->route("galeria.cms");
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
      $galeria = Galeria::findOrFail($id);
      return view("Cms.Galeria.update" , compact('galeria'));
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
      $galeria = Galeria::find($id);
      $galeria->titulo = $request->input('titulo');
      $galeria->imagen = $request->input('imagen');
      $galeria->fecha = $request->input('fecha');
      $galeria->autor = $request->input('autor');
      $galeria->descripcion = $request->input('descripcion');
      $galeria->save();
      return redirect()->route("galeria.cms");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
      $galeria = Galeria::find($id);
    	$galeria->delete();
      return redirect()->route("galeria.cms");
    }
}
