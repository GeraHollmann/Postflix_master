<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use App\User;
use Illuminate\Support\Facades\Auth;



class VistaPostController extends Controller
{

  public function listaPost(){
    if (Auth::guard()->check()) {
      $losPosts = Post::all();
      $usuarios = User::all();
      $vac = compact('losPosts', 'usuarios');
      return view('vistapost', $vac);
    }else{
      return redirect('login');
    }
}

}
