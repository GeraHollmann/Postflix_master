<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Post;
use App\Post_category;
use Illuminate\Support\Facades\Auth;

class PerfilController extends Controller
{

public function borrarPosteo(Request $req){
  $idPost = $req['id'];
  $post = Post::find($idPost);
  $post->delete();
  return redirect('/perfil');
}

public function formEditar($id)
{
    $posteo = Post::find($id);
    $categorias = Post_category::all();
    $vac = compact('posteo', 'categorias');
    return view('editarPosteo', $vac);
}

public function editarPosteo(Request $request){
  $posteo = Post::find($request['idPosteo']);

  $posteo->title_post = $request['title_post'];
  $posteo->title_movie = $request['title_movie'];

  $ruta = $request->file('image')->store("public");
  $nombreArchivo = basename($ruta);
  $posteo->image = $nombreArchivo;

  $posteo->description = $request['description'];
  $posteo->rating = $request['rating'];
  $posteo->users_id = User::find(auth()->id())['id'];
  $posteo->post_categories_id = $request['categoriaElegida'];

  $posteo->save();
  return redirect('/perfil');


}

public function detallePelicula($idPosteo) {
    $posteo = Post::find($idPosteo);
    $vac = compact('posteo');
    return view('detallePelicula', $vac);
}



}
