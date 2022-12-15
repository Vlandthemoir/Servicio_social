<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CmsController extends Controller
{
  //////////////////////////////////////////////////////////////////////////////
  //vistas para el inicio del panel de administracion
  public function create_home(){
    return view('Cms.home');
  }
  //////////////////////////////////////////////////////////////////////////////
}
