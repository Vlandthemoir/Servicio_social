
@extends('Layouts.blog')

@push('styles')
	<link href="{{asset('Blog/home.css')}}" rel="stylesheet">
@endpush
@section('content')

<div class="general-container">


<div class="container">
<h1 class="title">Desarrolla tus habilidades</h1>
<h1 class="title title-large">Desarrolla tus habilidades</h1>
<div id="img-1" class="img-container">
  <img class="img" src="{{asset('Images/card1.jpg')}}">
</div>

<div class="img-container second-animation">
  <img class="img" src="{{asset('Images/card2.jpg')}}">
</div>

<div class="img-container third-animation">
  <img class="img" src="{{asset('Images/card3.jpg')}}">
</div>

<div class="img-container fourth-animation">
  <img class="img nba" src="{{asset('Images/card4.jpg')}}">
</div>

<div class="img-container fifth-animation">
  <img class="img" src="{{asset('Images/card5.jpg')}}">
</div>

<div id="img-6" class="img-container sixth-animation">
  <img class="img" src="{{asset('Images/card6.jpg')}}">
</div>

<div id="img-7" class="img-container seventh-animation">
  <img class="img" src="{{asset('Images/card7.jpg')}}">
</div>
</div>
<!--
<div class="banner-gmaps">
<h2>Encuentranos en</h2>
<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3820.488278132336!2d-93.10819288598235!3d16.752365725219303!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x85ecd88665921a1d%3A0x3ea0b7329fb7ae15!2sCentro%20Cultural%20de%20Chiapas%20%22Jaime%20Sabines%22!5e0!3m2!1ses!2smx!4v1657220573312!5m2!1ses!2smx" width="1346" height="300" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
</div>
-->
</div>
@endsection
