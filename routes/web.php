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


Route::get("/index", function () {
    return view('index');
});

Route::get('/logout', function(){
   Auth::logout();
   return Redirect::to('index');
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

Route::post("/mis-contactos/agregar", "AmigosController@agregar");
Route::post("/mis-contactos/borrar", "AmigosController@borrar");


Route::get("/perfil", function(){
  return view("perfil");
 })->middleware('MiddlewareUsuarioLogueado');

Route::get("/vistapost", "VistaPostController@listaPost")->middleware('MiddlewareUsuarioLogueado');
Route::post("/vistapost/calificacion", "VistaPostController@calificar");


Route::get("/altaPost", "PostController@altaPost");/*->middleware('MiddlewareUsuarioLogueado');*/
Route::post("/altaPost", "PostController@alta");

Auth::routes();
