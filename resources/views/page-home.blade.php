@extends('layout')

@section('content')
	<main class="panel">
		<h2>Cervezas</h2>
		<div class="beer_big"><p id="quantity-dar">3</p></div>
		<div class="panel-buttons">
			<a href="{{ url('/canjear') }}">Canjear</a>
			<a href="#regalar" class="btn-regalar">Regalar</a>
		</div>
		<a href="{{ url('/') }}" class="benefits-link">Ver Beneficios</a>
	</main>
@stop