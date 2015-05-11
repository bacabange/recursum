{!! Form::model($usuario, ['route' => ['admin.usuario.destroy', $usuario->id], 'method' => 'delete', 'role' => 'form']) !!}
	<button class="btn btn-danger btn-sm pull-right"><i class="fa fa-times"></i> Eliminar</button>
{!! Form::close() !!}