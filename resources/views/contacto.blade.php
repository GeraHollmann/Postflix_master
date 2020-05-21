<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="/css/contact-style.css" >
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <title>Contacto PostFlix</title>
  </head>
  <body>
    <div class="container">
      <header class="container">
        <nav class="navbar navbar-light bg-transparent">
          <!-- LOGO -->
          <a title="PostFlix" href="./index.php">
            <img class="logo" src="logo.png" alt="Postflix">
          </a>
        </nav>
        <div class="form-inline  col-xs-2">
          <a title="Boton Home" href="index">
            <button class="btn btn-outline-success " style="margin:10px" id="boton" type="button"> Home </button>
          </a>
          @if (Auth::check())
            <a title="Boton Login" href="./logout">
              <button class="btn btn-outline-success" style="margin:10px" id="boton" type="button"> Cerrar Sesion </button>
            </a>
            <a title="Boton Login" href="./vistapost">
              <button class="btn btn-outline-success" style="margin:10px" id="boton" type="button"> Vista de posteos </button>
            </a>
            <a title="Boton Login" href="./perfil">
              <button class="btn btn-outline-success" style="margin:10px" id="boton" type="button"> Perfil </button>
            </a>
            <a title="Boton Login" href="./mis-contactos">
              <button class="btn btn-outline-success" style="margin:10px" id="boton" type="button"> Mis contactos </button>
            </a>
          @endif
          @if (!Auth::check())
          <a title="Boton Login" href="./login">
            <button class="btn btn-outline-success" style="margin:10px" id="boton" type="button"> Login </button>
          </a>
          <a title="Boton Registro" href="./register">
            <button class="btn btn-outline-success" style="margin:10px" id="boton" type="button"> Registro </button>
          </a>
          @endif
          <a title="Boton Ayuda" href="./faqs">
            <button class="btn btn-outline-success" style="margin:10px" id="boton" type="button"> F.A.Q.S </button>
          </a>
          <!--<a title="Boton Mis Posts" href="./vistapost">
            <button class="btn btn-outline-success" style="margin:10px" id="boton" type="button"> MisPosts </button>
          </a>-->
        </div>
      </header>
      <!-- COMIENZO DE CONTACTO POINTFLIX -->
      <section class="contacto col-lg-12 col-md-12 col-xs-12">
        <div class="h1titulo rounded-pill">
          <br>
          <h1>Contacte con nosotros!</h1>
          <br>
        </div>
        <br>

        <form id="form" class="form-signin rounded-pill" method="post" enctype="multipart/form-data">
          {{csrf_field()}} <!--SIEMPRE DEBE ESTAR DENTRO DEL FORMULARIO-->
          <p>Nombre*</p>
          <input type="text" id="inputNombre" name="first_name"class="form-control" placeholder="Ingrese su Nombre" required autofocus="">

          <p>Apellido*</p>
          <input type="text" id="inputNombre" name="last_name" class="form-control" placeholder="Ingrese su Apellido" required>

          <p>E-mail*</p>
          <input type="email" id="inputEmail" name="email" class="form-control" placeholder="Correo electronico" required autofocus="">

          <p>Dejanos tu comentario</p>
          <textarea id="textarea" placeholder="Escribe aqui tu comentario para contactar contigo..." name="comment" rows="8" cols="67"  ></textarea>
          <br>
          <button id="botoncoment" class="btn" type="submit" >Enviar Comentario</button>
          <br><br>
        </form>

      </section>
    </div>

  </body>
</html>
