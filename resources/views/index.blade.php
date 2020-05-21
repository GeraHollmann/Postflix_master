 <!DOCTYPE html>
 <html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="/css/home-style.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <title>PostFlix</title>
  </head>
  <body>
    <div class="container">
      <header>

        <nav class="navbar navbar-light bg-transparent">
          <!-- IMAGEN DEL LOGO -->
          <a title="Logo PostFlix" href=" ">
            <img class="logo" src="logo.png" alt="Postflix">
          </a>

          <!-- BARRA DE NAVEGACION -->
          <form id="barraNav" class="form-inline   col-lg-4 col-xs-12">
            @if (Auth::check())
              @if (Auth::user()->role == 'admin')
                <a title="Boton Ayuda" href="/vistaReclamos">
                  <button class="btn btn-outline-success" style="margin:10px" id="boton" type="button"> Reclamos </button>
                </a>
              @endif
              <a title="Boton Login" href="/logout">
                <button class="btn btn-outline-success" style="margin:; width:120px;" id="boton" type="button"> Cerrar Sesion </button>
              </a>
              <a title="Boton Login" href="/vistapost">
                <button class="btn btn-outline-success" style="margin:; width:139px;"  id="boton" type="button"> Vista de posteos </button>
              </a>
              <a title="Boton Registro" href="/perfil">
                <button class="btn btn-outline-success" style="margin:" id="boton" type="button"> Perfil </button>
              </a>
          @else

          <a title="Boton Login" href="/login">
            <button class="btn btn-outline-success" style= "margin:10px;" id="boton" type="button"> Login </button>
          </a>
          <a title="Boton Registro" href="/register">
            <button class="btn btn-outline-success" style="" id="boton" type="button"> Registro </button>
          </a>
            <a title="Boton Ayuda" href="/faqs">
              <button class="btn btn-outline-success" style="margin:10px" id="boton" type="button"> F.A.Q.S </button>
            </a>
            <a title="Boton Contacto" href="/contacto">
              <button class="btn btn-outline-success" style="margin:10px" id="boton" type="button"> Contacto </button>
            </a>
          @endif
            <!-- <button class="btn btn-sm btn-outline-secondary" type="button">Smaller button</button> -->
          </form>
        </nav>
      </header>
      <!-- INFO DEL SITIO -->
      <section class="intro-home col-lg-12 col-md-12 col-xs-12 rounded-pill">
        <h1>Postflix!</h1>
        <br>
        <p>Únete a la comunidad mas grande de fanáticos de las series y películas de Netflix!</p>
        <br>
        <p>Conoce gente con tus mismos gustos, postea tu propio contenido sobre tu serie o película favorita!</p>
        <br>
        <p></p>

      </section>
    </div>


    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
    integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
    integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>

    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
    integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>
