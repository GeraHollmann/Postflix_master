<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>Postflix</title>
        <link rel="stylesheet" href="css/vistapost-style.css">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

      </head>
      <body style="background-color: beige">
        <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
          <a href="./index.php">  <img id="postflixlogo" class="mb-4" src="logo.png" alt="" width="120" height="25"></a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarCollapse">
            <ul class="navbar-nav mr-auto">
              <li class="nav-item active">
                <a class="nav-link" href="./index">Home <span class="sr-only">(current)</span></a>
              </li>
              <li class="nav-item active">
                <a class="nav-link" href="./perfil">Perfil</a>
              </li>
              <li class="nav-item active">
                <a class="nav-link" href="./faqs">F.A.Q.S</a>
              </li>
              <li class="nav-item active">
                <a class="nav-link" href="./contacto">Ayuda</a>
              </li>
            </ul>
            <li class="nav-item">
              <button id="search" class="btn" type="submit"><a class="btn btn-outline-success" href="./logout">Cerrar Sesion</a></button>
            </li>
          </div>
        </nav>

            <main id="posteos" role="main" class="col-md-10 ml-sm-auto col-lg-12 px-4"><div class="chartjs-size-monitor" style="background-color:beige;position: absolute; left: 0px; top: 0px; right: 0px; bottom: 0px; overflow: hidden; pointer-events: none; visibility: hidden; z-index: -1;">
            <div class="chartjs-size-monitor-expand" style=" position:absolute;left:0;top:0;right:0;bottom:0;overflow:hidden;pointer-events:none;visibility:hidden;z-index:-1;"><div style="position:absolute;width:1000000px;height:1000000px;left:0;top:0"></div></div>
            <div class="chartjs-size-monitor-shrink" style="position:absolute;left:0;top:0;right:0;bottom:0;overflow:hidden;pointer-events:none;visibility:hidden;z-index:-1;"><div style="position:absolute;width:200%;height:200%;left:0; top:0"></div></div></div>
            <h1 style="background-color: beige;" id="tituloCentral">Reseñas de otros usuarios</h1>
            <div class="row" style="background-color:beige;">
                {{-- SE AGREGA UN FORELSE PARA QUE TRAIGA LOS DATOS DE LA PELICULA DE LA BASE DE DATOS --}}
                @forelse($losPosts as $post)
                    <div id="unPost" style="border-color:red" class="col-lg-4">
                        <div class="container">
                          <img id=imagePost src="/storage/{{$post->image}}" alt="" height="200px" width="300px">
                        </div>
                        <h3 id="titulos">Pelicula/Serie:</h3><p>{{ $post->title_movie  }}</p>
                        <h3 id="titulos">Titulo del Post:</h3><p>{{ $post->title_post }}</p>
                          <h3 id="titulos">Descripcion:</h3><p>{{ $post->description}}</p>
                        <div id="divflotante" class="flotar"><h2 id="titulos">Puntuación:</h2></div>

                        <div class="flotar"><p class="puntua">{{$post->rating}}</p></div>
                        <br>
                        <div id="divflotante" class="flotar"><h4 id="titulos">Categoria:</h4></div>
                        <div class="flotar"><p>{{$post->category->category_name}}</p></div>
                        <div class="flotar"><p>Creado por: {{$post->users->nickname}}</p></div>
                    </div>
                @empty
                    <h2>No se encontraron Posteos</h2>
                @endforelse
            </div>
            </main>
  </div>
</div>


      <footer class="container">
        <p class="float-right"><a id="bottom" href="#">Back to top</a></p>
        <p>© 2019 Postflix, Inc.</p>
      </footer>
    </main>

  </body>
</html>
