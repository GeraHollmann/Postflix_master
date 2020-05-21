<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use App\Post_category;
use App\User;

class PostController extends Controller
{

    public function altaPost(){
        $categorias = Post_category::all(); //Trae todos los datos de la tabla categorias
        $vac = compact('categorias');
        return view("altaPost",$vac);
    }

    public function alta(Request $req){

        $reglas = [
            'title_post' => "required|string|min:3",
            'title_movie' =>"required|string|min:2",
            'image' => "required|file",
            'description' =>"required|string|min:2|max:150",
            'rating' => "required|numeric|min:1|max:10",
            'categoriaElegida' => "required|"
        ];

        $mensajes = [
            "string" => "El campo :attribute debe ser un texto",
            "min" => "El campo :attribute tiene un minimo de :min",
            "max" => "El campo :attribute tiene un maximo de :max",
            "numeric" => "El campo :attribute debe ser un numero",
            "required" => "El campo :attribute es obligatorio"
        ];
        $this->validate($req,$reglas,$mensajes);

        $nuevoPost = new Post();

        $nuevoPost->title_post = $req['title_post'];
        $nuevoPost->title_movie = $req['title_movie'];

        $ruta = $req->file('image')->store("public");
        $nombreArchivo = basename($ruta);
        $nuevoPost->image = $nombreArchivo;

        $nuevoPost->description = $req['description'];
        $nuevoPost->rating = $req['rating'];
        $idLog = User::find(auth()->id());
        $nuevoPost->users_id = $idLog['id'];
        $nuevoPost->post_categories_id = $req['categoriaElegida'];

        $nuevoPost->save();
        return redirect('/perfil');

    }



}
