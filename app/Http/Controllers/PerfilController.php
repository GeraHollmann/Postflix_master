<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Illuminate\Support\Facades\Auth;

class PerfilController extends Controller
{
  //no se si sirve , probando los middleware
  // public function __construct()
  // {
  //     $this->middleware('auth');
  //       return redirect('/perfil');
  // }

  public function Usuarios(){
    if (Auth::guard()->check()) {
      $usuario = User::find(auth()->id());
      $vac = compact('usuario');
      return view('perfil', $vac);
    }else{
      return redirect('login');
    }

    }

}
