{{-- <!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 13px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
        </style>
    </head>
    <body>
        <div class="flex-center position-ref full-height">
            @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                        <a href="{{ route('login') }}">Login</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}">Register</a>
                        @endif
                    @endauth
                </div>
            @endif

            <div class="content">
                <div class="title m-b-md">
                    Laravel
                </div>

                <div class="links">
                    <a href="https://laravel.com/docs">Docs</a>
                    <a href="https://laracasts.com">Laracasts</a>
                    <a href="https://laravel-news.com">News</a>
                    <a href="https://blog.laravel.com">Blog</a>
                    <a href="https://nova.laravel.com">Nova</a>
                    <a href="https://forge.laravel.com">Forge</a>
                    <a href="https://github.com/laravel/laravel">GitHub</a>
                </div>
            </div>
        </div>
    </body>
</html> --}}

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="/css/home-style.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <title>PostFlix</title>
  </head>
  <body>

    <header class="container">
        <nav id="logo" class="navbar navbar-light bg-transparent">
          <!-- LOGO -->
          <a title="PostFlix" href="./index.php">
            <img class="logo" src="logo.png" alt="Postflix">
          </a>
        </nav>
        <div id="menu" class="form-inline ">
          <a title="Boton Login" href="./login">
            <button class="btn btn-outline-success" style="margin:10px" id="boton" type="button"> Login </button>
          </a>
          <a title="Boton Registro" href="./register">
            <button class="btn btn-outline-success" style="margin:10px" id="boton" type="button"> Registro </button>
          </a>
          <a title="Boton Mis Posts" href="./vistapost">
            <button class="btn btn-outline-success" style="margin:10px" id="boton" type="button"> MisPosts </button>
          </a>
          <a title="Boton Ayuda" href="./faqs">
            <button class="btn btn-outline-success" style="margin:10px" id="boton" type="button"> F.A.Q.S </button>
          </a>
          <a title="Boton Contacto" href="./contacto">
            <button class="btn btn-outline-success" style="margin:10px" id="boton" type="button"> Contacto </button>
          </a>
        </div>
    </header>

    <div class="container">
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
  </body>
</html>
