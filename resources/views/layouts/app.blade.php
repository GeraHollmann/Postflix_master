<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'PostFlix') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
    <div id="app">
      <header class="container">
        <nav class="navbar navbar-light bg-transparent">
          <!-- LOGO -->
          <a title="PostFlix" href="./index.php">
            <img class="logo" src="/logo.png" alt="Postflix" style="width:100%;">
          </a>
        </nav>
        <div class="form-inline  col-xs-2">
          <a title="Boton Home" href="/index">
            <button class="btn btn-outline-success " style="margin:10px" id="boton" type="button"> Home </button>
          </a>
          @if (Auth::check())
            <a title="Boton Mis Posts" href="/vistapost">
              <button class="btn btn-outline-success" style="margin:10px" id="boton" type="button"> MisPosts </button>
            </a>
            <a title="Boton Mis Posts" href="/perfil">
              <button class="btn btn-outline-success" style="margin:10px" id="boton" type="button"> Perfil </button>
            </a>
            <a title="Boton Contacto" href="/logout">
              <button class="btn btn-outline-success" style="margin:10px" id="boton" type="button"> Cerrar Sesion </button>
            </a>
          @endif
          <a title="Boton Contacto" href="/contacto">
            <button class="btn btn-outline-success" style="margin:10px" id="boton" type="button"> Ayuda </button>
          </a>
          <a title="Boton Mis Posts" href="/faqs">
            <button class="btn btn-outline-success" style="margin:10px" id="boton" type="button"> F.A.Q.S </button>
          </a>

        </div>
      </header>

        <main class="py-4">
            @yield('content')
        </main>
    </div>
</body>
</html>
