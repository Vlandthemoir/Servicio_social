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
			<li><a href="{{route('verano.blog')}}">Verano</a></li>
			<li><a href="{{route('permanente.blog')}}">Permamentes</a></li>
                </ul>
              </li>
	      <li><a href="{{route('articulos.blog')}}">Articulos</a>
	      </li>
	      
	      <li><a href="{{route('galeria.blog')}}">Galeria</a></li>

            </ul>

          </nav>
    </header>
    <div class="container">
			@yield('content')
		</div>
  </body>
</html>
