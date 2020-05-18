<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('index');
});


Route::get("/index", "IndexController@home");

Route::get('/logout', function(){
   Auth::logout();
   return Redirect::to('index.php');
});//boton para desloguear

Route::get("/login", function() {
  return view('login');
});
//Route::post("/login", "LoginController@__construct");

Route::get("/register", function() {
	return view("register");
});
Route::post("/register", "RegisterController@create");

Route::get("/faqs", function(){
  return view("faqs");
});

Route::get("/contacto", function(){
  return view("contacto");
});
Route::post("/contacto", "ContactoController@contacto");

Route::get("/mis-contactos", function(){
  return view("mis-contactos");
})->middleware('MiddlewareUsuarioLogueado');
Route::post("/mis-contactos", "AmigosController@amigos"); //verificar si tiene un controller
Route::post("/mis-contactos/agregar", "AmigosController@agregar");
Route::post("/mis-contactos/borrar", "AmigosController@borrar");

Route::get("/perfil", function(){
  return view("perfil");
});
// ->middleware('MiddlewareUsuarioLogueado')
//Comente el middleware de perfil para poder cambiarle el CSS

Route::post("/perfil", "PerfilController@Usuarios");
Route::post("/perfil", "PerfilController@pelis");
Route::post("/perfil/agregar", "PerfilController@agregarPelis");
Route::post("/perfil/borrar", "PerfilController@borrarPelis");
Route::post("/perfil/editar", "PerfilController@editarPelis");

Route::get("/vistapost", function(){
  return view("vistapost");
})->middleware('MiddlewareUsuarioLogueado');
route::get("/vistapost", "VistaPostController@listaPost");
Route::post("/vistapost", "VistaPostController@interactuar");
Route::post("/vistapost/calificacion", "VistaPostController@calificar");
Route::post("/vistapost/comentar", "VistaPostController@comentar");

Route::get("/altaPost", "PostController@selectCategoria");/*->middleware('MiddlewareUsuarioLogueado');*/
Route::post("/altaPost", "PostController@alta");

Auth::routes();
