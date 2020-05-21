<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use Illuminate\Support\Facades\Auth;



class VistaPostController extends Controller
{
  public function listaPost(){
    if (Auth::guard()->check()) {
      $losPosts = Post::all();
      $vac = compact('losPosts');
      return view('vistapost', $vac);
    }else{
      return redirect('login');
    }
}


  public function editarPost(){

  }
}
