<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head class="">
    <link rel="stylesheet" href="css/altapost-style.css" >
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <meta charset="utf-8">
    <title>Postflix Nuevo Post</title>
  </head>
  <body>
    <header class="container">
      <nav class="navbar navbar-light bg-transparent">
        <!-- LOGO -->
        <a title="PostFlix" href="./index.php">
          <img class="logo" src="logo.png" alt="Postflix">
        </a>
      </nav>
      <div class="form-inline  col-xs-2">
        <a title="Boton Home" href="index.php">
          <button class="btn btn-outline-success " style="margin:10px" id="boton" type="button"> Home </button>
        </a>

        <a title="Boton Login" href="./login">
          <button class="btn btn-outline-success" style="margin:10px" id="boton" type="button"> Login </button>
        </a>
        <a title="Boton Registro" href="./register">
          <button class="btn btn-outline-success" style="margin:10px" id="boton" type="button"> Registro </button>
        </a>
        <a title="Boton Mis Posts" href="./vistapost">
          <button class="btn btn-outline-success" style="margin:10px" id="boton" type="button"> MisPosts </button>
        </a>

        <a title="Boton Contacto" href="./contacto">
          <button class="btn btn-outline-success" style="margin:10px" id="boton" type="button"> Contacto </button>
        </a>
      </div>
    </header>
    <br><br>
    <h1 id=titulo>Creando Nuevo Post!</h1>
    <br>
    <section class="container">
      <form id="alta" class="form-signin rounded-pill col-8 col-md-8 col-lg-12" action="/altaPost" method="post" enctype="multipart/form-data">
        {{csrf_field()}} <!--SIEMPRE DEBE ESTAR DENTRO DEL FORMULARIO-->
        <p id="tituloPost">Titulo del Post*</p>
        <input type="text" id="inputTitulo" name="title_post" class="form-control" placeholder="Ingrese el titulo del post" required autofocus="">
        <br>
        <p id="tituloPelicula">Titulo de la Pelicula/Serie </p>
        <input type="text" id="inputTitulo" name="title_movie" class="form-control" placeholder="Ingrese el titulo de la pelicula/serie" required autofocus="">
        <br>
        <p id="imagen-tit" class="col-xs-8 col-md-8">Ingresa la Imagen de tu post</p>
        <input type="file" id="botonarchivo" name="image">
        <br><br>
        <p id="descripcion-tit">Descripción</p>
        <textarea id="comentario" placeholder="Escribe aqui la descripción de tu post!..." name="description" rows="4" cols="67"  ></textarea>
        <div id="box-puntuacion">
          <p id="puntuacion-tit">Ingresa una puntuacion</p>
          <select id="puntuacion" class="form-control" name="rating">
            <option >Elija una puntuación</option>
            <option >1</option><option >2</option><option >3</option><option >4</option>
            <option >5</option><option >6</option><option >7</option><option >8</option>
            <option >9</option><option >10</option>
          </select>
        </div>
        {{-- AGREGAR SELECT DE CATEGORIAS --}}
        <div id="box-puntuacion">
          <p id="puntuacion-tit">Seleccione una categoria</p>
          <select id="categorias" class="form-control" name="category">
            <option >Elija una categoria</option>
              @forelse ($lasCategorias as $categorias)
                <option >
                {{$categorias->category_name}}
              @empty
                <h2>No se encontraron Categorias</h2>
                </option>
              @endforelse
          </select>
        </div>
        <br><br>
        <button id="botoncoment" class="btn" type="submit" >Publicar Post</button>
        <br><br>
      </form>
    </section>

  </body>
</html>
