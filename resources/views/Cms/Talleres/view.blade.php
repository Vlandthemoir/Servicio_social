@extends('Layouts.cms')

@push('styles')
	<link href="{{asset('Cms/Talleres/view.css')}}" rel="stylesheet">
@endpush
@section('content')
<div class="general-container">
	<div class="title">
		<h3 id="prueba">Registro de talleres</h3>
	</div>
	<div class="form-container">
		<div class="title">
			<h3>Registro</h3>
		</div>
		<form action="{{route('talleres-create.cms')}}" method="POST">
      @csrf
			<h3>Nombre</h3>
			<input id="form-name" oninput="load()" type="text" name="nombre" placeholder="">
			<h3>Portada</h3>
			<input id="form-image" oninput="load()" type="text" name="imagen" placeholder="">
			<h3>Dias</h3>
			<input id="form-days" oninput="load()" type="text" name="dias" placeholder="">
			<h3>Horario</h3>
			<input id="form-hours" oninput="load()" type="text" name="horario" placeholder="">
			<h3>Edades</h3>
			<textarea id="form-ages" oninput="load()" name="edades" rows="2" cols="30"></textarea>
      <h3>Tipo de curso</h3>
      <select name="tipo" value="">
        <option value="Verano">Verano</option>
        <option value="Permanente">Permanente</option>
      </select>

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
          <td>Tipo</td>
					<td colspan="2">Ajustes</td>
				</tr>
			</thead>
			<tbody>
        @foreach ($datos as $item)
				<tr>
					<td>{{ $item->id }}</td>
					<td>{{ $item->nombre }}</td>
					<td>{{ $item->dias }}</td>
					<td>{{ $item->horario }}</td>
					<td>{{ $item->edades }}</td>
          <td>{{ $item->tipo }}</td>
					<td>
            <form action="{{route('talleres-delete.cms',$item->id)}}" method="POST">
              @csrf
              @method('DELETE')
              <button type="submit" id="delete">Eliminar</button>
            </form>
					</td>
					<td>
            <form action="{{route('talleres-edit.cms',$item->id)}}" method="GET">
              @csrf
              <button type="submit" id="update">Actualizar</button>
            </form>
					</td>
				</tr>
        @endforeach
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
@endsection
