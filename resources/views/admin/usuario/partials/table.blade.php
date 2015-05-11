<table class="table table-hover table-bordered table-striped table-condensed">
	<thead>
		<tr>
			<th>Nombre</th>
			<th>Usuario</th>
			<th>Tipo</th>
			<th>Email</th>
			<th>Acciones</th>
		</tr>
	</thead>
	<tbody>
		@foreach($usuarios as $usuario)
		<tr data-id="{{ $usuario->id }}">
			<td>{{ $usuario->nombre_completo }}</td>
			<td>{{ $usuario->username }}</td>
			<td>{{ config('options.tipos.'.$usuario->tipo) }}</td>
			<td>{{ $usuario->email }}</td>
			<td>
				<div class="text-center">
					<a href="{{ route('admin.usuario.edit', $usuario->id) }}" class="btn btn-primary btn-xs"><i class="fa fa-wrench"></i></a>
					<a href="#" class="btn btn-danger btn-xs btn-delete"><i class="fa fa-times"></i></a>
				</div>
			</td>
		</tr>
		@endforeach
	</tbody>
</table>