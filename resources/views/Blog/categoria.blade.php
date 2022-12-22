@extends('Layouts.blog')

@push('styles')
	<link href="{{asset('Blog/categoria.css')}}" rel="stylesheet">
@endpush
@section('content')
<div class="general-container">
<div class="tag-list">
  <div>
	<div class="list-element"><a href="{{ route('categoria.blog', 'Arte') }}" class="element" style="background:#C0392B;">Arte</a></div>
	<div class="list-element"><a href="{{ route('categoria.blog', 'Cine') }}" class="element" style="background:#9B59B6;">Cine</a></div>
	<div class="list-element"><a href="{{ route('categoria.blog', 'Cultura') }}" class="element" style="background:#2980B9">Cultura</a></div>
	<div class="list-element"><a href="{{ route('categoria.blog', 'Historia') }}" class="element" style="background:#1ABC9C">Historia</a></div>
	<div class="list-element"><a href="{{ route('categoria.blog', 'Literatura') }}" class="element" style="background:#F900F2">Literatura</a></div>
	</div>
	<div>
	<div class="list-element"><a href="{{ route('categoria.blog', 'Musica') }}" class="element" style="background:#F1C40F">Musica</a></div>
	<div class="list-element"><a href="{{ route('categoria.blog', 'Eventos') }}" class="element" style="background:#E67E22">Eventos</a></div>
	<div class="list-element"><a href="{{ route('categoria.blog', 'Otros') }}" class="element" style="background:#34495E">Otros</a></div>
	</div>
</div>
  <div class="article-container">
    @foreach ($articulos as $datos)
  <div class="blog-entry">
    <img class="blog-img" src="{{$datos->portada}}" alt="">
    <div class="content-date"><div class="date">{{$datos->fecha}}</div></div>
    <div class="blog-content">
      <div class="content-title"><h1>{{$datos->titulo}}</h1></div>

      <div class="content-tag"  ><a href="{{ route('categoria.blog', $datos->categoria) }}">{{$datos->categoria}}</a></div>
      <span class="content-text"><?php echo $datos->resumen; ?></span>
        <a class="content-button" href="{{ route('articulo.blog', $datos->id) }}">Leer mas</a>
    </div>
  </div>
  @endforeach

 <script>
	window.onload = function setColor(){
			  const elements = document.getElementsByClassName('content-tag')
			 for(var i = 0;i < elements.length;i++){
			  if(elements[i].textContent == "Arte"){elements[i].style.background="#C0392B";}
			  if(elements[i].textContent == "Cine"){elements[i].style.background="#9B59B6";}
			  if(elements[i].textContent == "Cultura"){elements[i].style.background="#2980B9";}
			  if(elements[i].textContent == "Historia"){elements[i].style.background="#1ABC9C";}
			  if(elements[i].textContent == "Literatura"){elements[i].style.background="#F900F2";}
			  if(elements[i].textContent == "Musica"){elements[i].style.background="#F1C40F";}
			  if(elements[i].textContent == "Eventos"){elements[i].style.background="#E67E22";}
			  if(elements[i].textContent == "Otros"){elements[i].style.background="#34495E";}
				  }

		 };
 </script>
    </div>
</div>
@endsection
