<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use App\Post_category;


class PostController extends Controller
{

    public function selectCategoria(){
        $lasCategorias = Post_category::all(); //Trae todos los datos de la tabla categorias
        $vac = compact('lasCategorias');
        return view("altaPost",$vac);
    }

    public function alta(Request $req){


        // AGREGAR VALIDACIONES ACA!
        $nuevoPost = new Post();

        $nuevoPost->title_post = $req['title_post'];
        $nuevoPost->title_movie = $req['title_movie'];

        $ruta = $req->file('image')->store("public");
        $nombreArchivo = basename($ruta);
        $nuevoPost->image = $nombreArchivo;

        $nuevoPost->description = $req['description'];
        $nuevoPost->rating = $req['rating'];
        $nuevoPost->users_id = $req['users_id'];
        $nuevoPost->post_categories_id = $req['category'];

        $nuevoPost->save();
        return redirect('/perfil');

    }



}
