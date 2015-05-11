<?php namespace App\Http\Controllers;

use App\Usuario;

class UsuarioController extends Controller {
	public function getIndex()
	{
		$usuario = Usuario::get();
		dd($usuario->toArray());
	}
}
