<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Post;
use Illuminate\Support\Facades\Auth;

class PerfilController extends Controller
{

public function borrarPosteo(Request $req){
  $idPost = $req['id'];
  $post = Post::find($idPost);
  $post->delete();
  return redirect('/perfil');
}

public function editarPosteo(Request $request)
{
    $posteo = Post::findOrFail($request->id);
    dd($posteo);
    $posteo->fill($request->all());
    $posteo->save();

    return Redirect::to('/perfil');
}



}
