@extends('Layouts.blog')

@push('styles')
	<link href="{{asset('Blog/articulo.css')}}" rel="stylesheet">
@endpush
@section('content')
<div class="general-container">
	@foreach ($articulo as $datos)
  <article class="article">
    <div class="title">
    <h1>{{$datos->titulo}}</h1>
    </div>
    <div class="img" style="background: url({{$datos->portada}}) no-repeat center center fixed;"></div>
    <div class="info">
      <div class="date">{{$datos->fecha}}</div>
      <div class="divisor"></div>
      <div class="tag">{{$datos->categoria}}</div>
    </div>

    <div class="body">{{$datos->cuerpo}}</div>

  </article>
	 @endforeach
</div>
@endsection
