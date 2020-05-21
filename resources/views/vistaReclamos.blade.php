<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">


    <title>Perfil Postflix</title>


    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <!-- Bootstrap core CSS -->
<link rel="stylesheet" href="/css/perfil-style.css">
  </head>
  <body>
    <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
      <a href="./index.php">  <img id="postflixlogo" class="mb-4" src="logo.png" alt="" width="120" height="25"></a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarCollapse">
        <ul class="navbar-nav mr-auto">
          <li class="nav-item active">
            <a class="nav-link" href="/index">Home <span class="sr-only">(current)</span></a>
          </li>
          <li class="nav-item active">
            <a class="nav-link" href="/vistapost">Vista de posteos</a>
          </li>
          <li class="nav-item active">
            <a class="nav-link" href="/faqs">F.A.Q.S</a>
          </li>
          <li class="nav-item active">
            <a class="nav-link" href="/contacto">Ayuda</a>
          </li>
        </ul>
          <button id="search" class="btn" type="submit"><a class="btn btn-outline-success" href="/logout">Cerrar Sesion</a></button>
      </div>
    </nav>

    <div class="container-fluid">
      <div class="row">

    <main role="main" class="col-md-12 ml-sm-auto col-lg-12 px-4"><div class="chartjs-size-monitor" style="position: absolute; left: 0px; top: 0px; right: 0px; bottom: 0px; overflow: hidden; pointer-events: none; visibility: hidden; z-index: -1;"><div class="chartjs-size-monitor-expand" style="position:absolute;left:0;top:0;right:0;bottom:0;overflow:hidden;pointer-events:none;visibility:hidden;z-index:-1;"><div style="position:absolute;width:1000000px;height:1000000px;left:0;top:0"></div></div><div class="chartjs-size-monitor-shrink" style="position:absolute;left:0;top:0;right:0;bottom:0;overflow:hidden;pointer-events:none;visibility:hidden;z-index:-1;"><div style="position:absolute;width:200%;height:200%;left:0; top:0"></div></div></div>
      <div id="middletitle" class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">

        <h1>Zona de reclamos a resolver por {{Auth::user()->nickname}}</h1>
      </div>
      <div class="h3titulo rounded-pill">

        <h3>Reclamos sin resolver</h3>
          <br>
      </div>
      <div class="container">
        <div class="row">

    @forelse ($reclamo as $contact)
      <div id="posteador" class="col-md-4">
        <div class="card mb-4 sahdow-sm">
              <div class="card-body">

            <p>Nombre: {{$reclamo[0]['first_name']}}</p>
            <p>Apellido: {{$reclamo[0]['last_name']}}</p>
            <p>Email: {{$reclamo[0]['email']}}</p>
            <p>Asunto: {{$reclamo[0]['comment']}}</p>


            <div class="d-flex justify-content-between align-items-center">
              <div class="btn-group">
                <form class="" action="/borrarReclamos" method="post">
                  {{csrf_field()}}
                  <input type="hidden" class="btn btn-sm btn-outline-success" name="id" value="{{$reclamo[0]['id']}}">
                  <input class="btn btn-sm btn-outline-success" type="submit" name="" value="Borrar reclamo">

                </form>
                  </div>
            </div>
          </div>
        </div>
      </div>
    @empty

    @endforelse

  </div>
</div>
</main>
</div>
</div>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script>window.jQuery || document.write('<script src="/docs/4.3/assets/js/vendor/jquery-slim.min.js"><\/script>')</script><script src="/docs/4.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-xrRywqdh3PHs8keKZN+8zzc5TX0GRTLCcmivcbNJWm2rs5C8PRhcEn3czEjhAO9o" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/feather-icons/4.9.0/feather.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.3/Chart.min.js"></script>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>


  </body>
</html>
