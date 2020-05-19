<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use Illuminate\Support\Facades\Auth;



class VistaPostController extends Controller
{

// rand(5, 15)

  public function listaPost(){
    if (Auth::guard()->check()) {
      $losPosts = Post::all(); //Trae todos los datos de la tabla peliculas
      $vac = compact('losPosts');
      return view('vistapost', $vac);
    }else{
      return redirect('login');
    }
}


  public function editarPost(){

  }
}
