<?php namespace App\Http\Requests;

use App\Http\Requests\Request;
use Illuminate\Routing\Route;

class EditarUsuarioRequest extends Request {

	protected $route;

	public function __construct(Route $route)
	{
		$this->route = $route;
	}

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
			'username' => 'required|unique:usuario,username,'.$this->route->getParameter('usuario'),
			'email' => 'required|email|unique:usuario,email,'.$this->route->getParameter('usuario'),
			'password' => 'required',
			'tipo' => 'required|in:admin,manager,user'
		];
	}

}
