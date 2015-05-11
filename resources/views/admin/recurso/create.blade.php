@extends('app')

@section('content')
	<div class="row">
		<div class="col-lg-7">
			<div class="panel panel-default">
				<div class="panel-body">
					@include('admin.usuario.partials.errors')
						
					{!! Form::open(['route' => 'admin.usuario.store', 'method' => 'post', 'role' => 'form']) !!}
						@include('admin.usuario.partials.labels')

						<button class="btn btn-success pull-right" type="submit" name="guardar"><i class="fa fa-save"></i> Guardar</button>
					{!! Form::close() !!}
				</div>
			</div>
		</div>
	</div>
@stop