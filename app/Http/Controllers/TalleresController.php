<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Talleres;
class TalleresController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $datos = Talleres::orderBy('id', 'asc')->get();
	    return view('Cms.Talleres.view', compact('datos'));
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
      $talleres = new Talleres();
      $talleres->nombre = $request->post('nombre');
      $talleres->imagen = $request->post('imagen');
      $talleres->dias = $request->post('dias');
      $talleres->horario = $request->post('horario');
      $talleres->edades = $request->post('edades');
      $talleres->tipo = $request->post('tipo');
      $talleres->save();
      return redirect()->route("talleres.cms");
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
      $talleres = Talleres::findOrFail($id);
      return view("Cms.Talleres.update" , compact('talleres'));
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
      $talleres = Talleres::find($id);
      $talleres->nombre = $request->input('nombre');
      $talleres->imagen = $request->input('imagen');
      $talleres->dias = $request->input('dias');
      $talleres->horario = $request->input('horario');
      $talleres->edades = $request->input('edades');
      $talleres->tipo = $request->input('tipo');
      $talleres->save();
      return redirect()->route("talleres.cms");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
      $talleres = Talleres::find($id);
    	$talleres->delete();
      return redirect()->route("talleres.cms");
    }
}
