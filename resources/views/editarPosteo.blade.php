<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head >
    <link rel="stylesheet" href="/css/edit-style.css" >
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Postflix Nuevo Post</title>
  </head>
  <body>
    <header class="container">
      <nav class="navbar navbar-light bg-transparent">
        <!-- LOGO -->
        <a title="Logo PostFlix" href="/index">
          <img class="logo" src="/public/imagenes/logo.png" alt="Postflix">
        </a>
      </nav>
      <div class="form-inline  col-xs-2">
        <a title="Boton Home" href="index">
          <button class="btn btn-outline-success " style="margin:10px" id="boton" type="button"> Home </button>
        </a>
        <a title="Boton Mis Posts" href="/vistapost">
          <button class="btn btn-outline-success" style="margin:10px" id="boton" type="button"> MisPosts </button>
        </a>
        <a title="Boton Mis Posts" href="/perfil">
          <button class="btn btn-outline-success" style="margin:10px" id="boton" type="button"> Perfil </button>
        </a>
        <a title="Boton Mis Posts" href="/mis-contactos">
          <button class="btn btn-outline-success" style="margin:10px" id="boton" type="button"> Contactos </button>
        </a>
        <a title="Boton Contacto" href="/contacto">
          <button class="btn btn-outline-success" style="margin:10px" id="boton" type="button"> Ayuda </button>
        </a>
        <a title="Boton Contacto" href="/logout">
          <button class="btn btn-outline-success" style="margin:10px" id="boton" type="button"> Cerrar Sesion </button>
        </a>
      </div>
    </header>
    <br><br>
    <h1 id=titulo>Edita el Post!</h1>
    <br>
    <section class="container">
      <form id="alta" class="form-signin rounded-pill col-8 col-md-8 col-lg-12" action="/perfil/editarPosteo" method="post" enctype="multipart/form-data">
        {{csrf_field()}} <!--SIEMPRE DEBE ESTAR DENTRO DEL FORMULARIO-->
        <input type="hidden" name="idPosteo" value="{{$posteo->id}}">

        <p id="tituloPost">Titulo del Post</p>
        <input type="text" id="inputTitulo" name="title_post" class="form-control" value="{{$posteo->title_post}}" placeholder="Ingrese el titulo del post" required autofocus="">
        <br>
        <p id="tituloPelicula">Titulo de la Pelicula/Serie </p>
        <input type="text" id="inputTitulo" name="title_movie" class="form-control" value="{{$posteo->title_movie}}" placeholder="Ingrese el titulo de la pelicula/serie" required autofocus="">
        <br>
        <p id="imagen-tit" class="col-xs-8 col-md-8">Ingresa la Imagen de tu post</p>
        <input type="file" id="botonarchivo" value="{{$posteo->image}}" name="image">
        <br><br>
        <p id="descripcion-tit">Descripción</p>
        <textarea id="comentario" placeholder="Escribe aqui la descripción de tu post!..." name="description" rows="4" cols="67">{{$posteo->description}}</textarea>
        <div id="box-puntuacion">
          <p id="puntuacion-tit">Ingresa una puntuacion</p>
          <select id="puntuacion" class="form-control" value="{{$posteo->rating}}" name="rating">
            <option >Elija una puntuación</option>
            <option >1</option><option >2</option><option >3</option><option >4</option>
            <option >5</option><option >6</option><option >7</option><option >8</option>
            <option >9</option><option >10</option>
          </select>
        </div>
        {{-- AGREGAR SELECT DE CATEGORIAS --}}
        <div id="box-puntuacion">
          <p id="puntuacion-tit">Seleccione una categoria</p>
          <select id="categorias" class="form-control" value="{{$posteo->categoria}}" name="categoriaElegida">
            <option value="{{$posteo->categoria}}">Elija una categoria</option>
              @foreach ($categorias as $categoria)
                <option value="{{$categoria->id}}">
                {{$categoria->category_name}}
              </option>
              @endforeach
          </select>
        </div>
        <br>
        <br><br>
        <button id="botoncoment" class="btn" type="submit" >Postear!!</button>
        <br><br>
      </form>
    </section>

  </body>
</html>
