@extends('Layouts.blog')

@push('styles')
	<link href="{{asset('Blog/imagen.css')}}" rel="stylesheet">
@endpush
@section('content')
<div class="general-container">
    @foreach ($imagen as $datos)
    <div class="article">
    		<div class="left-side">
    			<img src="{{$datos->imagen}}">
    		</div>
    		<div class="right-side">
    			<h2>{{$datos->titulo}}</h2>
    			<p>{{$datos->descripcion}}</p>
    			<div>
    				<h5>{{$datos->autor}}</h5>
    				<h5>{{$datos->fecha}}</h5>
    			</div>
    		</div>
    	</div>
    @endforeach
</div>
@endsection
