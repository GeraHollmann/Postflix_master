<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use App\Post_category;


class VistaPostController extends Controller
{

// rand(5, 15)

  public function listaPost(){
        $losPosts = Post::all(); //Trae todos los datos de la tabla peliculas
        $vac = compact('losPosts');
        return view('vistapost', $vac);
    }



  public function editarPost(){

  }
}
