<div class="form-group">
	{!! Form::label('nombre', trans('validation.attributes.nombre')) !!}
	{!! Form::text('nombre', null, ['class' => 'form-control']) !!}
</div>

<div class="form-group">
	{!! Form::label('apellido', trans('validation.attributes.apellido')) !!}
	{!! Form::text('apellido', null, ['class' => 'form-control']) !!}
</div>

<div class="form-group">
	{!! Form::label('email', trans('validation.attributes.email')) !!}
	{!! Form::email('email', null, ['class' => 'form-control']) !!}
</div>

<div class="form-group">
	{!! Form::label('username', trans('validation.attributes.username')) !!}
	{!! Form::text('username', null, ['class' => 'form-control']) !!}
</div>

<div class="form-group">
	{!! Form::label('password', trans('validation.attributes.password')) !!}
	{!! Form::password('password', ['class' => 'form-control']) !!}
</div>

<div class="form-group">
	{!! Form::label('tipo', trans('validation.attributes.tipo')) !!}
	{!! Form::select('tipo', config('options.tipos'), 'admin', ['class' => 'form-control']) !!}
</div>