@extends('layout')

@section('content')
	<main class="biblio">
		<h2>Biblioteca / Nivel <strong>1</strong></h2>

		@for ($i = 1; $i < 13; $i++)
			@if ($i == 1)
				<?php $var = ' selected'; ?>
			@elseif ($i % 4 == 0)
				<?php $var = ' last'; ?>
			@else
				<?php $var = '';?>
			@endif
			<div class="tip-block{{$var}}">
				<a href="{{ url('/tip/'.$i) }}">
					<i></i>
					<h4>Tip {{$i}}</h4>
				</a>
			</div>
		@endfor
		</div>
	</main>
	<h5 class="price">
		Regalo: <strong>1 Vaso Patagonia</strong>
	</h5>
@stop