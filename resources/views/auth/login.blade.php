@extends('app')

@section('content')
	<div class="separator"></div>

	<div class="row">
		<div class="col-lg-6 col-xs-12">
			<fielset>
				<legend>Iniciar sesión</legend>
				@include('admin.usuario.partials.errors')
					
				{!! Form::open(['url' => 'auth/login', 'method' => 'post', 'role' => 'form']) !!}

					<div class="form-group">
						{!! Form::label('username', trans('validation.attributes.username')) !!}
						{!! Form::text('username', null, ['class' => 'form-control', 'placeholder' => trans('validation.attributes.username')]) !!}
					</div>

					<div class="form-group">
						{!! Form::label('password', trans('validation.attributes.password')) !!}
						{!! Form::password('password', ['class' => 'form-control', 'placeholder' => trans('validation.attributes.password')]) !!}
					</div>

					<div class="checkbox">
						<label>
							<input type="checkbox" name="remember"> Recordarme
						</label>
					</div>

					<button class="btn btn-success pull-right" type="submit" name="entrar">Entrar</button>
				{!! Form::close() !!}
			</fielset>

		</div>
		<div class="col-lg-6 col-xs-12">
			<fielset>
				<legend>Registrarse</legend>
				{!! Form::open(['url' => 'auth/registrar', 'method' => 'post', 'role' => 'form']) !!}
					@include('auth.partials.register')

					<button class="btn btn-primary pull-right" type="submit" name="registrar">Registrar</button>
				{!! Form::close() !!}
			</fielset>
		</div>
	</div>
@stop