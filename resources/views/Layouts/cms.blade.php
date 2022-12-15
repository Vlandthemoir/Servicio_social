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
	    <a  href="{{route('home.blog')}}" class="logo-header"><h1>Centro<span>Cultural</span></h1></a>
          <div class="events-bar">
            <div class="events-fondo"></div>
            <div class="events-text">
              <p class="events-title">Proximos eventos</p>

            </div>
          </div>
          <nav class="navbar">

            <ul>
              <li><a href="#">Talleres</a>
                <ul>
			<li><a href="">Verano</a></li>
			<li><a href="">Permamentes</a></li>
                </ul>
              </li>
	      <li><a href="">Articulos</a>
	      </li>
	      <li><a href="">Calendario</a></li>
	      <li><a href="">Galeria</a></li>

            </ul>

          </nav>
    </header>
    <div class="container">
			@yield('content')
		</div>
  </body>
</html>
