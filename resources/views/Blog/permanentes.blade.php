@extends('Layouts.blog')

@push('styles')
	<link href="{{asset('Blog/permanentes.css')}}" rel="stylesheet">
@endpush
@section('content')
<div class="general-container">
  <div class="title">
    <h1>Talleres Permanentes</h1>
  </div>

<div class="table">
      @foreach ($permanente as $datos)

        <div class="card">
        <div class="face front">
          <img src="{{ $datos->imagen }}" alt="">
          <h3>{{ $datos->nombre }}</h3>
        </div>
        <div class="face back">
          <h3>Detalles</h3>
          <p>
              <div class="bot">Dias</div>
              <div>{{ $datos->dias }}</div>
              <div class="bot">Horario</div>
              <div>{{ $datos->horario }}</div>
              <div class="bot">Edades</div>
              <div>{{ $datos->edades }}</div>
            </p>
        </div>
      </div>

      @endforeach
</div>

</div>
@endsection
