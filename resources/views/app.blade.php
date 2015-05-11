<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="Recursos web para diseñadores y desarrolladores que trabajan por el internet.">
	<meta name="author" content="Stiven Castillo">
	<link rel="icon" href="../../favicon.ico">

	<title>
		@yield('titulo', 'Recursum 2.0')
	</title>

	{{-- Bootstrap core CSS --}}
	{!! Html::style('css/bootstrap.min.css') !!}
	<link href="//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
	{!! Html::style('css/main.css') !!}
	@yield('css')
</head>

<body>

	@include('menu')
	@yield('header')

	<div class="container">

		@yield('content')

	</div>

	<div class="separator"></div>

	<footer>
		<div class="container">
			<p class="text-center">Recursum es un servicio desarrollado por <a href="#">imosaico</a> - Derechos reservados 2014</p>
		</div>
	</footer>

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
	{!! Html::script('js/bootstrap.min.js') !!}
	{!! Html::script('js/jquery.equalheights.min.js') !!}
	{!! Html::script('js/main.js') !!}
	@yield('scripts')
</body>
</html>