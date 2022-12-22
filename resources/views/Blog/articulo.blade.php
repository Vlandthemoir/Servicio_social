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
		<div class="info">
			<a class="tag" href="{{ route('categoria.blog', $datos->categoria) }}">{{$datos->categoria}}</a>
    </div>
    <div class="body">
			<div class="img">
				<img src="{{$datos->portada}}" alt="">
			</div>
			<?php echo $datos->cuerpo; ?>
			<div class="date">Fecha: {{$datos->fecha}}</div>
		</div>

  </article>
	 @endforeach
	 <script>
		window.onload = function setColor(){
				  const elements = document.getElementsByClassName('tag')
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
@endsection
