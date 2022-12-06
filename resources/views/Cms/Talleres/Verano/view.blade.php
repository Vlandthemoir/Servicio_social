{% extends "cms_layout.html" %}
{% block content %}
<link rel= "stylesheet" type= "text/css" href= "{{ url_for('cms.static',filename='css/style_cmsverano.css') }}">
<div class="general-container">
	<div class="title">
		<h3 id="prueba">TALLERES DE VERANO</h3>
	</div>
	<div class="form-container">
		<div class="title">
			<h3>Registro</h3>
		</div>
		<form action="{{url_for('cms.add_verano')}}" method="POST">
			<h3>Nombre</h3>
			<input id="form-name" oninput="load()" type="text" name="nombre" placeholder="">
			<h3>Portada</h3>
			<input id="form-image" oninput="load()" type="text" name="portada" placeholder="">
			<h3>Dias</h3>
			<textarea id="form-days" oninput="load()" name="dias" rows="2" cols="30"></textarea>
			<h3>Horario</h3>
			<textarea id="form-hours" oninput="load()" name="horario" rows="2" cols="30"></textarea>
			<h3>Edades</h3>
			<textarea id="form-ages" oninput="load()" name="edades" rows="2" cols="30"></textarea>
			<div class="bottom-buttons">
				<button type="submit"><b>Guardar</b></button>
			</div>
		</form>
	</div>
	<div class="preview-container">
		<div class="title">
			<h3>Vista Previa</h3>
		</div>
        	<div class="card">
        		<div class="face front">
          			<img id="preview-image"  src="" alt="">
          			<h3 id="preview-name"></h3>
        		</div>
        		<div class="face back">
          			<h3>Detalles</h3>
          			<p>
              				<div class="bot">Dias</div>
              				<div id="preview-days" ></div>
              				<div class="bot">Horario</div>
              				<div id="preview-hours"></div>
              				<div class="bot">Edades</div>
              				<div id="preview-ages"></div>
            			</p>
        		</div>
      		</div>
	</div>
	<div class="table-container">
		<div class="title">
			<h3>Tabla de contenidos</h3>
		</div>
		<table id="content-table">
			<thead>
				<tr>
					<td>ID</td>
					<td>Nombre</td>
					<td>Dias</td>
					<td>Horario</td>
					<td>Edades</td>
					<td colspan="2">Ajustes</td>
				</tr>
			</thead>
			<tbody>
				{% for ve in verano  %}
				<tr>
					<td>{{ve.0}}</td>
					<td>{{ve.1}}</td>
					<td>{{ve.3}}</td>
					<td>{{ve.4}}</td>
					<td>{{ve.5}}</td>
					<td>
						<a id="delete" href="/cms/verano/delete/{{ ve.0 }}">Eliminar</a>
					</td>
					<td>
						<a id="update" href="">Modificar</a>
					</td>
				</tr>
				{%endfor%}
			</tbody>
		</table>
	</div>
</div>
<script type="text/javascript">
	window.addEventListener('keydown',function(e){
		if(e.keyIdentifier=='U+000A'||e.keyIdentifier=='Enter'||e.keyCode==13){
			if(e.target.nodeName=='INPUT'&&e.target.type=='text'){
				e.preventDefault();
				return false;
			}
		}
	},true);
	function load() {
		  const a = document.getElementById("form-name").value;
		  document.getElementById("preview-name").innerHTML = a;
		  const b = document.getElementById("form-image").value;
		  document.getElementById("preview-image").src = b;
		  const c = document.getElementById("form-days").value;
		  document.getElementById("preview-days").innerHTML = c;
		  const d = document.getElementById("form-hours").value;
		  document.getElementById("preview-hours").innerHTML = d;
		  const e = document.getElementById("form-ages").value;
		  document.getElementById("preview-ages").innerHTML = e;
	}
</script>
{% endblock %}
