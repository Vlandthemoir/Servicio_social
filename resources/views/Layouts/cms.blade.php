<!DOCTYPE html>
<html lang="es" dir="ltr">
  <head>
    <meta charset="UTF-8">
    @stack('styles')
		<link rel="stylesheet" href="{{asset('Layouts/blog.css')}}">
    <title>CentroCultural</title>
  </head>
  <body>
    <header class="header">
      <a  href="{{route('home.cms')}}" class="logo-header"><h1>Centro<span>Cultural</span>Administración</h1></a>
      <div class="events-bar">
        <div class="events-fondo"></div>
        <div class="events-text">
          <p class="events-title">Proximos eventos</p>
        </div>
      </div>
      <nav class="navbar">
        <ul>
          <li><a href="{{route('usuario.cms')}}">Usuarios</a></li>
          <li><a href="{{route('talleres.cms')}}">Talleres</a></li>
          <li><a href="{{route('articulos.cms')}}">Articulos</a></li>
          <li><a href="{{route('galeria.cms')}}">Galeria</a></li>
        </ul>
      </nav>
    </header>
    <div class="container">
			@yield('content')
		</div>
  </body>
</html>
