<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use App\Models\Usuarios;
use Illuminate\Support\Facades\Hash;
class LoginController extends Controller
{
  public function create(){
  return view('Cms.Auth.login');
}

public function store(Request $request){

  $correo = request()->input('correo');

  $encontrado = Usuarios::where('correo', '=', $correo)->first();

  if(is_null($encontrado)){
    return 'Su correo electronico es incorrecto';
  }else{

    $contraseña = request()->input('contraseña');
    $contraseña_encontrada =$encontrado->contraseña;
    if(Hash::check($contraseña,$contraseña_encontrada)){
      Auth::login($encontrado);
      return redirect()->to('/cms/home');
    }else{
      return 'Tu contraseña es incorrecta';
    }

  }

}
public function destroy(){
  auth()->logout();
  return redirect()->to('/');
}
}
