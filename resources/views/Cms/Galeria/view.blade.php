@extends('Layouts.cms')

@push('styles')
	<link href="{{asset('Cms/Galeria/view.css')}}" rel="stylesheet">
	<script src="https://cdn.ckeditor.com/ckeditor5/35.4.0/classic/ckeditor.js"></script>
@endpush
@section('content')

<div class="general-container">
	<div class="title">
		<h3 id="prueba">GALERIA</h3>
	</div>
	<div class="form-container">
		<div class="title">
			<h3>Registro</h3>
		</div>
		<form action="{{route('galeria-create.cms')}}" method="POST">
			@csrf
			<h3>Titulo</h3>
			<input id="form-name" oninput="load()" type="text" name="titulo" placeholder="">
			<h3>Portada</h3>
			<input id="form-image" oninput="load()" type="text" name="imagen" placeholder="">
			<h3>Fecha</h3>
			<input id="form-date" oninput="load()" type="date" name="fecha" placeholder="">
			<h3>Autor</h3>
			<input id="form-autor" oninput="load()" type="text" name="autor" placeholder="">
			<h3>Descripcion</h3>
			<textarea id="form-description" oninput="load()" name="descripcion" rows="9" cols="40"></textarea>
			<div class="bottom-buttons">
				<button type="submit"><b>Guardar</b></button>
			</div>
		</form>
	</div>
	<div class="preview-container">
		<div class="title">
			<h3>Vista Previa</h3>
		</div>
	        <div class="article">
			<div class="left-side">
		                <img id="preview-image"  src="">
			</div>
			<div class="right-side">
				<h2 id="preview-name"></h2>
				<p id="preview-description"></p>
				<div>
					<h5 id="preview-autor"></h5>
					<h5 id="preview-date"></h5>
				</div>
			</div>
		</div>
	</div>
	<div class="table-container">
		<div class="title">
			<h3>Tabla de contenidos</h3>
		</div>
		<table>
			<thead>
				<tr>
					<td>ID</td>
					<td>Titulo</td>
					<td>Imagen</td>
					<td>Fecha</td>
					<td>Autor</td>
					<td colspan="2">Ajustes</td>
				</tr>
			</thead>
			<tbody>
				@foreach ($datos as $item)
				<tr>
					<td>{{ $item->id }}</td>
					<td>{{ $item->titulo }}</td>
					<td>
						<div class="row">
							<div class="column">
								<img src="{{ $item->imagen }}"/>
							</div>
						</div>
					</td>
					<td>{{ $item->fecha }}</td>
					<td>{{ $item->autor }}</td>
					<td>
            <form action="{{route('galeria-delete.cms',$item->id)}}" method="POST">
              @csrf
              @method('DELETE')
              <button type="submit" id="delete">Eliminar</button>
            </form>
					</td>
					<td>
            <form action="{{route('galeria-edit.cms',$item->id)}}" method="GET">
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

		  const c = document.getElementById("form-date").value;
		  document.getElementById("preview-date").innerHTML = c;

		  const d = document.getElementById("form-autor").value;
		  document.getElementById("preview-autor").innerHTML = d;

		  const e = document.getElementById("form-description").value;
		  document.getElementById("preview-description").innerHTML = e;
	}

	ClassicEditor
        .create( document.querySelector( '' ) )
        .catch( error => {
            console.error( error );
        } );
</script>
@endsection
