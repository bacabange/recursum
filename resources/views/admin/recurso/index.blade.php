@extends('app')


@section('content')
	<div class="row">
		<div class="col-lg-12">
			<nav class="navbar navbar-inverse">
				<div class="container-fluid">
					<div class="navbar-header">
					<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#menu-modulo">
							<span class="sr-only">Toggle navigation</span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
						</button>
						<a class="navbar-brand" href="#"> Usuarios </a>
					</div>

					<div class="collapse navbar-collapse" id="menu-modulo">
						<ul class="nav navbar-nav">
							<li><a href="{{ route('admin.usuario.create') }}"><i class="fa fa-plus"></i> Nuevo</a></li>
							<li><a href="#"><i class="fa fa-download"></i> Exportar</a></li>
						</ul>

						{!! Form::model(Request::only('nombre', 'tipo'), ['route' => 'admin.usuario.index', 'method' => 'get', 'class' => 'navbar-form navbar-right', 'role' => 'search']) !!}
							<div class="form-group">
								{!! Form::text('nombre', null, ['class' => 'form-control', 'placeholder' => 'Buscar']) !!}
								{!! Form::select('tipo', config('options.tipos'), null, ['class' => 'form-control']) !!}
							</div>
							<button type="submit" class="btn btn-primary"><i class="fa fa-search"></i> Buscar</button>
						{!! Form::close() !!}
					</div>
				</div>
			</nav>

			<div class="panel panel-default">
				<div class="panel-body">
					@if(Session::has('message'))
						<div class="alert alert-success">
							<i class="fa fa-check"></i> {{ Session::get('message') }}
						</div>
					@endif
					<small>{{ $usuarios->total() }} Registros | Pagina {{ $usuarios->currentPage() }} de {{ $usuarios->lastPage() }} </small>
				</div>
				@include('admin.usuario.partials.table')
			</div>
			{!! $usuarios->appends(Request::only('nombre', 'tipo'))->render() !!}

		</div>
	</div>

	{!! Form::open(['route' => ['admin.usuario.destroy', ':USER_ID'], 'method' => 'delete', 'id' => 'form-delete']) !!}
	{!! Form::close() !!}
@endsection

@section('scripts')
	{!! Html::script('js/admin/usuario/index.js') !!}
@endsection