<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class UsuarioPerfil extends Model {

	protected $table = 'usuario_perfil';
	protected $fillable = ['bio', 'twitter', 'web'];

	public function usuario()
	{
		return $this->hasOne('App\Usuario', 'id_usuario');
	}
}
