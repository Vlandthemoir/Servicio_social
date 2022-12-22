@extends('Layouts.cms')

@push('styles')
	<link href="{{asset('Cms/Articulos/view.css')}}" rel="stylesheet">
  <script src="https://cdn.ckeditor.com/ckeditor5/35.4.0/classic/ckeditor.js"></script>
@endpush
@section('content')
<div class="general-container">
	<div class="title">
		<h3 id="prueba">Registro de articulos</h3>
	</div>
	<div class="form-container">
		<div class="title">
			<h3>Registro</h3>
		</div>
		<form action="{{route('articulos-create.cms')}}" method="POST">
      @csrf
			<h3>Titulo</h3>
			<input id="form-name" oninput="load()" type="text" name="titulo" placeholder="">
			<h3>Portada</h3>
			<input id="form-image" oninput="load()" type="text" name="portada" placeholder="">
			<h3>Fecha</h3>
			<input id="form-days"  type="date" name="fecha" placeholder="">
			<h3>Categoria</h3>
      <select name="categoria" value="">
        <option value="Arte">Arte</option>
        <option value="Cine">Cine</option>
        <option value="Cultura">Cultura</option>
        <option value="Historia">Historia</option>
        <option value="Literatura">Literatura</option>
        <option value="Musica">Musica</option>
        <option value="Eventos">Eventos</option>
        <option value="Otros">Otros</option>
      </select>
      <h3>Resumen</h3>
			<textarea id="form-ck1" oninput="load()" name="resumen" rows="2" cols="50"></textarea>
      <h3>Cuerpo</h3>
			<textarea id="form-ck2" oninput="load()" name="cuerpo" rows="2" cols="50"></textarea>
			<div class="bottom-buttons">
				<button type="submit"><b>Guardar</b></button>
			</div>
		</form>
	</div>

	<div class="table-container">
		<div class="title">
			<h3>Tabla de contenidos</h3>
		</div>
		<table id="content-table">
			<thead>
				<tr>
					<td>ID</td>
					<td>Titulo</td>
					<td>Fecha</td>
					<td>Categoria</td>
					<td colspan="2">Ajustes</td>
				</tr>
			</thead>
			<tbody>
        @foreach ($datos as $item)
				<tr>
					<td>{{ $item->id }}</td>
					<td>{{ $item->titulo }}</td>
					<td>{{ $item->fecha }}</td>
					<td>{{ $item->categoria }}</td>
					<td>
            <form action="{{route('articulos-delete.cms',$item->id)}}" method="POST">
              @csrf
              @method('DELETE')
              <button type="submit" id="delete">Eliminar</button>
            </form>
					</td>
					<td>
            <form action="{{route('articulos-edit.cms',$item->id)}}" method="GET">
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
  ClassicEditor
        .create( document.querySelector( '#form-ck1' ) )
        .catch( error => {
            console.error( error );
        } );
  ClassicEditor
        .create( document.querySelector( '#form-ck2' ) )
        .catch( error => {
            console.error( error );
        } );
</script>
@endsection
