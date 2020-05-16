<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>Postflix</title>
        <link rel="stylesheet" href="css/vistapost-style.css">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

      </head>
      <body style="background-color: #C3C3A5">
        <nav class="navbar navbar-dark fixed-top bg-dark flex-md-nowrap p-0 shadow">
          <a href="./index.php"><img id="postflixlogo" class="mb-4" src="./Imagenes/logo.png" alt="" width="120" height="25"></a>
          <input class="form-control form-control-dark w-100" type="text" placeholder="Buscar" aria-label="Search">
          <ul class="navbar-nav px-3">
            <li class="nav-item text-nowrap">
              <a class="nav-link" href="./index.php">Cerrar sesion</a>
            </li>
          </ul>
        </nav>


        <div class="container-fluid" >
          <div class="row" >
            <nav class="col-md-2 d-none d-md-block bg-light sidebar bg-dark">
              <div class="sidebar-sticky bg-dark">
                <ul class="nav flex-column">
                  <li class="nav-item">
                    <a class="nav-link active" href="./index.php"><span class="sr-only"></span>Home</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="./perfil">Perfil</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="./contacto">Contactanos</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="./faqs">Preguntas frecuentes</a>
                  </li>
                </ul>

                <h6 class="sidebar-heading d-flex justify-content-between align-items-center px-3 mt-4 mb-1 text-muted">
                  <span>Your reviews</span>
                    <a class="d-flex align-items-center text-muted" href="#">
                      <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-plus-circle"><circle cx="12" cy="12" r="10"></circle><line x1="12" y1="8" x2="12" y2="16"></line><line x1="8" y1="12" x2="16" y2="12"></line></svg>
                    </a>
                </h6>
                <ul class="nav flex-column mb-2">
                  <li class="nav-item">
                    <a class="nav-link" href="#">
                      <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-file-text"><path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"></path><polyline points="14 2 14 8 20 8"></polyline><line x1="16" y1="13" x2="8" y2="13"></line><line x1="16" y1="17" x2="8" y2="17"></line><polyline points="10 9 9 9 8 9"></polyline></svg>
                        Pelicula 1
                    </a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="#">
                      <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-file-text"><path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"></path><polyline points="14 2 14 8 20 8"></polyline><line x1="16" y1="13" x2="8" y2="13"></line><line x1="16" y1="17" x2="8" y2="17"></line><polyline points="10 9 9 9 8 9"></polyline></svg>
                        Pelicula 2
                    </a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="#">
                      <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-file-text"><path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"></path><polyline points="14 2 14 8 20 8"></polyline><line x1="16" y1="13" x2="8" y2="13"></line><line x1="16" y1="17" x2="8" y2="17"></line><polyline points="10 9 9 9 8 9"></polyline></svg>
                        Pelicula 3
                    </a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="#">
                      <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-file-text"><path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"></path><polyline points="14 2 14 8 20 8"></polyline><line x1="16" y1="13" x2="8" y2="13"></line><line x1="16" y1="17" x2="8" y2="17"></line><polyline points="10 9 9 9 8 9"></polyline></svg>
                        Pelicula 4
                    </a>
                  </li>
                </ul>
              </div>
            </nav>

            <main id="posteos" role="main" class="col-md-8 ml-sm-auto col-lg-10 px-4"><div class="chartjs-size-monitor" style="position: absolute; left: 0px; top: 0px; right: 0px; bottom: 0px; overflow: hidden; pointer-events: none; visibility: hidden; z-index: -1;">
            <div class="chartjs-size-monitor-expand" style="position:absolute;left:0;top:0;right:0;bottom:0;overflow:hidden;pointer-events:none;visibility:hidden;z-index:-1;"><div style="position:absolute;width:1000000px;height:1000000px;left:0;top:0"></div></div>
            <div class="chartjs-size-monitor-shrink" style="position:absolute;left:0;top:0;right:0;bottom:0;overflow:hidden;pointer-events:none;visibility:hidden;z-index:-1;"><div style="position:absolute;width:200%;height:200%;left:0; top:0"></div></div></div>
            <h1 id="titulos">Tus Peliculas Favoritas</h1>
            <div class="row">
                {{-- SE AGREGA UN FORELSE PARA QUE TRAIGA LOS DATOS DE LA PELICULA DE LA BASE DE DATOS --}}
                @forelse($losPosts as $post)
                    <div id="unPost" class="col-lg-4">
                        {{-- <svg class="bd-placeholder-img rounded-circle" width="140" height="140" preserveAspectRatio="xMidYMid slice" focusable="false" role="img" aria-label="Placeholder: 140x140"></svg> --}}
                        <div class="container">
                          <img id=imagePost src="{{$post->image}}" alt="">
                        </div>
                        <h3 id="titulos">Pelicula/Serie:</h3><p>{{ $post->title_movie  }}</p>
                        <h3 id="titulos">Titulo del Post:</h3><p>{{ $post->title_post }}</p>
                        <p>{{ $post->description}}</p>
                        <div id="divflotante" class="flotar"><h2 id="titulos">Puntuación:</h2></div>
                        <div class="flotar"><p class="puntua">{{$post->rating}}</p></div>
                        <br>
                        <div id="divflotante" class="flotar"><h2 id="titulos">Categoria:</h2></div>
                        <div class="flotar"><p>{{$post->category->category_name}}</p></div> <!--SOLO ME TRAE EL ID-->
                    </div><!-- /.col-lg-4 -->
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
