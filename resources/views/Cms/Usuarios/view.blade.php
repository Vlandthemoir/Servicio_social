@extends('Layouts.cms')

@push('styles')
	<link href="{{asset('Cms/Usuarios/view.css')}}" rel="stylesheet">
@endpush
@section('content')
<div class="general-container">
	<div class="title">
		<h3 id="prueba">Registro de usuarios</h3>
	</div>
	<div class="form-container">
		<div class="title">
			<h3>Registro</h3>
		</div>
		<form action="{{route('usuario-create.cms')}}" method="POST">
			@csrf
			<h3>Nombre</h3>
			<input id="form-name" oninput="load()" type="text" name="nombre" placeholder="">
			<h3>Correo</h3>
			<input id="form-name" oninput="load()" type="text" name="correo" placeholder="">
			<h3>Contraseña</h3>
			<input id="form-image" oninput="load()" type="text" name="contraseña" placeholder="">
			<h3>Rol</h3>
			<select name="tipo" value="">
				<option value="Administrador">Administrador</option>
				<option value="Colaborador">Colaborador</option>
			</select>
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
					<td>Nombre</td>
					<td>Correo</td>
					<td>Rol</td>
					<td colspan="2">Ajustes</td>
				</tr>
			</thead>
			<tbody>
       @foreach ($datos as $item)
				<tr>
					<td>{{ $item->id }}</td>
					<td>{{ $item->nombre }}</td>
					<td>{{ $item->correo }}</td>
					<td>{{ $item->rol }}</td>
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
@endsection

