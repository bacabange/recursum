<nav class="navbar navbar-default">
	<div class="container">
		<div class="navbar-header">
			<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
				<span class="sr-only">Toggle navigation</span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			</button>
			<a class="navbar-brand" href="{{ url('/') }}">Recursum</a>
		</div>
		<div id="navbar" class="collapse navbar-collapse">
			<ul class="nav navbar-nav">
				<li class="active"><a href="#about">Descubrir</a></li>
				<li><a href="#contact">Destacados</a></li>
			</ul>
			@if (!Auth::guest())
				<ul class="nav navbar-nav navbar-right">
					@if(Auth::user()->tipo == 'admin')
						<li class="dropdown">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Administrar <span class="caret"></span></a>
							<ul class="dropdown-menu" role="menu">
								<li><a href="{{ route('admin.usuario.index') }}">Usuarios</a></li>
								<li><a href="{{ route('admin.recurso.index') }}">Recursos</a></li>
								<li><a href="#">Categorías</a></li>
								<li><a href="#">Tags</a></li>
							</ul>
						</li>
					@else
						<li><a href="#">Mis Recursos</a></li>
					@endif
					<li class="dropdown">
						<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">{{ Auth::user()->nombre_completo }} <span class="caret"></span></a>
						<ul class="dropdown-menu" role="menu">
							<li><a href="#">Perfil</a></li>
							<li class="divider"></li>
							<li><a href="{{ url('auth/logout') }}">Cerrar Sesión</a></li>
						</ul>
					</li>
				</ul>
			@endif


		</div>
	</div>
</nav>