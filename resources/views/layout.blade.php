<!DOCTYPE html>
<html>
<head>
	<title>Share 2 Learn</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
	<link rel="stylesheet" href="{{url('')}}/css/reset.css">
	<link rel="stylesheet" href="{{url('')}}/css/main.css">
</head>
<body class="back-intern">

	<header>
		<a href="{{ url('/') }}" id="logo"><img src="{{url('')}}/images/logo.png"></a>
	</header>

	@yield('content')

	<nav>
		<ul>
			<li class="nav1"><a href="{{ url('/') }}">Cerveza</a></li>
			<li class="nav2"><a href="{{ url('/enciclopedia') }}">Enciclopedia</a></li>
			<li class="nav3"><a href="{{ url('/login') }}">Menu</a></li>
		</ul>
	</nav>

	<div id="modal-regalar" class="modal modal-send">
		<h2>Enviar</h2>
		<div class="beer_big"><p id="val-dar">1</p></div>
		<div class="plus"><a href="#" class="sumar-dar">+</a><a href="#" class="restar-dar">-</a></div>
		<div class="buttons-send">
			<a href="seleccionar_amigo.html">A un amigo</a>
			<a href="#">A un desconocido</a>
		</div>
		<div class="nav-modal">
			<a href="#" class="btn-regalar">Cerrar</a>
		</div>
	</main>

	<script type="text/javascript" src="{{ url('js/jquery-3.2.0.min.js') }}"></script>
	<script type="text/javascript" src="{{ url('js/app.js') }}"></script>

</body>
</html>