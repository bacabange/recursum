@extends('app')

@section('header')
	<header class="section-header">
		<div class="container">

			<div class="row">
				<div class="col-lg-12">
					<div class="intro-message">
						<h1>Descubre y Comparte</h1>
						<h3>Recursos que facilitan el diseño y desarrollo web.</h3>
						<hr class="intro-divider">

						@if (Auth::guest())

							<div class="col-xs-12 col-sm-4 col-sm-offset-2 col-md-3 col-md-offset-3 col-lg-2 col-lg-offset-4">
								<a href="{{ url('auth/login') }}" class="btn btn-success btn-block">
									<span class="network-name">Ingresar</span>
								</a>
							</div>

							<div class="separator visible-xs"></div>

							<div class="col-xs-12 col-sm-4 col-md-3 col-lg-2">
								<a href="{{ url('auth/registrar') }}" class="btn btn-primary btn-block">
									<span class="network-name">Registrarse</span>
								</a>
							</div>
						@endif
					</div>
				</div>
			</div>

		</div>
	</header>
@stop

@section('content')
	<section class="row section-search">
		<div class="col-xs-12 col-sm-12">
			<p class="hidden-xs">Buscas algo especifico? Dale, tal vez lo encuentres</p>
			<form class="form-horizontal">
				<div class="form-group">
					<div class="col-xs-12">
						<input class="form-control" type="text" id="formGroupInputSmall" placeholder="Buscar...">
					</div>
				</div>
			</form>
		</div>
	</section>

	<section class="row section-resources">
		<!-- Menu lg -->
		<div class="col-sm-4 hidden-xs">
			<div id="menu">
				<div class="panel list-group">
					<a href="javascript:void(0);" class="list-group-item" data-toggle="collapse" data-target="#backend" data-parent="#menu">Backend <span class="label label-success pull-right">15</span></a>
					<div id="backend" class="sublinks collapse">
						<a class="list-group-item small"><i class="fa fa-angle-right"></i> Herramientas</a>
						<a class="list-group-item small"><i class="fa fa-angle-right"></i> Frameworks</a>
						<a class="list-group-item small"><i class="fa fa-angle-right"></i> Testing</a>
					</div>

					<a href="javascript:void(0);" class="list-group-item" data-toggle="collapse" data-target="#frontend" data-parent="#menu">Frontend <span class="label label-success pull-right">1233</span></a>
					<div id="frontend" class="sublinks collapse">
						<a class="list-group-item small"><i class="fa fa-angle-right"></i> Herramientas</a>
						<a class="list-group-item small"><i class="fa fa-angle-right"></i> Frameworks</a>
						<a class="list-group-item small"><i class="fa fa-angle-right"></i> Testing</a>
					</div>

					<a href="javascript:void(0);" class="list-group-item" data-toggle="collapse" data-target="#mobile" data-parent="#menu">Mobile <span class="label label-success pull-right">502</span></a>
					<div id="mobile" class="sublinks collapse">
						<a class="list-group-item small"><i class="fa fa-angle-right"></i> Herramientas</a>
						<a class="list-group-item small"><i class="fa fa-angle-right"></i> Frameworks</a>
						<a class="list-group-item small"><i class="fa fa-angle-right"></i> Testing</a>
						<a class="list-group-item small"><i class="fa fa-angle-right"></i> Tutoriales/Cursos</a>
					</div>

					<a href="javascript:void(0);" class="list-group-item" data-toggle="collapse" data-target="#articles" data-parent="#menu">Articulos <span class="label label-success pull-right">502</span></a>
					<div id="articles" class="sublinks collapse">
						<a class="list-group-item small"><i class="fa fa-angle-right"></i> Ebooks</a>
						<a class="list-group-item small"><i class="fa fa-angle-right"></i> Conferencias</a>
						<a class="list-group-item small"><i class="fa fa-angle-right"></i> Blogs</a>
					</div>

					<a href="javascript:void(0);" class="list-group-item">Tutoriales <span class="label label-success pull-right">256</span></a>
					<a href="javascript:void(0);" class="list-group-item">Sin Categoria <span class="label label-success pull-right">321</span></a>
				</div>
			</div>
		</div>

		<div class="col-xs-12 col-sm-8 recursos">
			<div class="row">
				<article class="col-xs-12 col-sm-6 col-lg-4">
					<div class="recurso thumbnail">
						<div class="caption-img text-center">
							<a href="#" class="btn"><i class="fa fa-external-link"></i> Visitar</a>
						</div>
						<img src="img/pag.png" alt="...">
						<div class="caption">
							<h4>Nombre del Coso</h4>
							<p class="text-danger pull-left"><i class="fa fa-heart"></i> 1758</p>
							<div class="btn-group pull-right" role="group">
								<button type="button" class="btn btn-success btn-sm"><i class="fa fa-check"></i></button>
								<button type="button" class="btn btn-success btn-sm"><i class="fa fa-heart"></i></button>
								<button type="button" class="btn btn-success btn-sm"><i class="fa fa-search-plus"></i></button>
							</div>
						</div>
					</div>
				</article>
			</div>
			<p class="text-center">
				<button class="btn btn-default btn-sm"><i class="fa fa-plus"></i> Mostrar Más</button>
			</p>
		</div>
	</section>
@stop