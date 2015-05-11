<?php namespace App;

use Illuminate\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Auth\Passwords\CanResetPassword;
use Illuminate\Contracts\Auth\Authenticatable as AuthenticatableContract;
use Illuminate\Contracts\Auth\CanResetPassword as CanResetPasswordContract;

class Usuario extends Model implements AuthenticatableContract, CanResetPasswordContract {

	use Authenticatable, CanResetPassword;

	protected $table = 'usuario';
	protected $fillable = ['nombre', 'apellido', 'username', 'email', 'password', 'tipo'];
	protected $hidden = ['password', 'remember_token'];

	public function perfil()
	{
		return $this->hasOne('App\UsuarioPerfil', 'id_usuario');
	}

	public function getNombreCompletoAttribute()
	{
		return $this->nombre." ".$this->apellido;
	}

	public function setPasswordAttribute($value)
	{
		if (! empty($value)) {			
			$this->attributes['password'] = \Hash::make($value);
		}
	}

	public function scopeNombre($query, $nombre)
	{
		if ($nombre != "") {
			$query->where(\DB::raw("CONCAT(nombre, ' ', apellido)"), 'LIKE', '%'.$nombre.'%');
		}
	}

	public function scopeTipo($query, $tipo)
	{
		$tipos = config('options.tipos');

		if($tipo != "" && isset($tipos[$tipo])){
			$query->where('tipo', $tipo);
		}
	}

	public function isAdmin()
	{
		return $this->tipo === 'admin';
	}
}
