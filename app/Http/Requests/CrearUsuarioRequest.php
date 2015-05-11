<?php namespace App\Http\Requests;

use App\Http\Requests\Request;

class CrearUsuarioRequest extends Request {

	/**
	 * Determine if the user is authorized to make this request.
	 *
	 * @return bool
	 */
	public function authorize()
	{
		return true;
	}

	/**
	 * Get the validation rules that apply to the request.
	 *
	 * @return array
	 */
	public function rules()
	{
		return [
			'nombre' => 'required',
			'apellido' => 'required',
			'username' => 'required|unique:usuario,username',
			'email' => 'required|email|unique:usuario,email',
			'password' => 'required',
			'tipo' => 'required|in:admin,manager,user'
		];
	}

}
