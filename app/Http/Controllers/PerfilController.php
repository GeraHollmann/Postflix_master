<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\User;

class PerfilController extends Controller
{
  //no se si sirve , probando los middleware
  // public function __construct()
  // {
  //     $this->middleware('auth');
  //       return redirect('/perfil');
  // }

  public function Usuarios(){
        $Usuarios = User::all(); //Trae todos los datos de la tabla User
        $vac = compact('Usuarios');
        return view('perfil', $vac);
    }
    public function getNombreCompleto(){
      $Usuarios = User::all();
      return $Usuarios->first_name . ' ' . $Usuarios->last_name;
    }
}
