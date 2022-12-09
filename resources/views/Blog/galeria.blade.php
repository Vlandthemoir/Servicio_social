@extends('Layouts.blog')

@push('styles')
	<link href="{{asset('Blog/galeria.css')}}" rel="stylesheet">
@endpush
@section('content')
<div class="general-container">
	<div class="title">
	     <h1>Galeria</h1>
	</div>
	<div class="row">

		<div class="column">
	@foreach ($columna1 as $datos1)
	<a href="{{ route('imagen.blog', $datos1->titulo) }}"><img  src="{{ $datos1->imagen }}"/></a>
	@endforeach
		</div>

		<div class="column">
	@foreach ($columna2 as $datos2)
	<a href="{{ route('imagen.blog', $datos2->titulo) }}"><img  src="{{ $datos2->imagen }}"/></a>
	@endforeach
		</div>

		<div class="column">
	@foreach ($columna3 as $datos3)
	<a href="{{ route('imagen.blog', $datos3->titulo) }}"><img  src="{{ $datos3->imagen }}"/></a>
	@endforeach
		</div>

	</div>
</div>
@endsection
