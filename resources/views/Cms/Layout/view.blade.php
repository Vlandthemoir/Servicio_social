<!DOCTYPE html>
<html lang="es" dir="ltr">
  <head>
    <meta charset="UTF-8">
    <link rel="stylesheet" type="text/css"  href="{{ url_for('cms.static', filename='css/style_cmslayout.css') }}">
    <title>CentroCultural</title>
  </head>
  <body>
	  <header class="header">
	    <a  href="{{url_for('cms.home')}}" class="logo-header"><h1>Panel de <span>Administración</span></h1></a>
		<nav class="navbar">
			<ul>
				<li><a>Talleres</a>
					<ul>
						<li><a href="{{url_for('cms.verano')}}">Taller de verano</a></li>
						<li><a href="{{url_for('cms.permanente')}}">Taller permanente</a></li>
					</ul>
				</li>
				<li><a>Articulos</a></li>
				<li><a href="{{url_for('cms.galeria')}}">Galeria</a></li>
			</ul>
		</nav>
	  </header>
    <div class="container">
      {% block content%}
      {% endblock%}
   </div>
 
  </body>
 </html>
