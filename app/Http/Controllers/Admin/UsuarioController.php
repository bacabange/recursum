<?php namespace App\Http\Controllers\Admin;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Usuario;
use App\UsuarioPerfil;
use App\Http\Requests\CrearUsuarioRequest;
use App\Http\Requests\EditarUsuarioRequest;
use Illuminate\Http\Request;
use Illuminate\Routing\Route;
use Illuminate\Session\SessionManager;

class UsuarioController extends Controller {

	protected $session;

	public function __construct(SessionManager $session)
	{
		$this->session = $session;
		$this->beforeFilter('@findUsuario', ['only' => ['edit', 'show', 'update', 'destroy']]);
	}

	public function findUsuario(Route $route)
	{
		$this->usuario = Usuario::findOrFail($route->getParameter('usuario'));
	}

	public function index(Request $request)
	{
		$usuarios = Usuario::nombre($request->get('nombre'))->tipo($request->get('tipo'))->paginate();
		return view('admin.usuario.index', compact('usuarios'));
	}

	public function create()
	{
		return view('admin.usuario.create');
	}

	public function store(CrearUsuarioRequest $request)
	{
		$usuario = new Usuario;
		$usuario->fill($request->only('nombre', 'apellido', 'username', 'password', 'email', 'tipo'));
		if ($usuario->save()) {
			$this->session->flash('message', 'Usuario creado con éxito');
			return \Redirect::route('admin.usuario.index');
		}

	}

	public function show($id)
	{
		//
	}

	public function edit($id)
	{
		return view('admin.usuario.edit')->with('usuario', $this->usuario);
	}

	public function update(EditarUsuarioRequest $request, $id)
	{
		$this->usuario->fill($request->only('nombre', 'apellido', 'username', 'password', 'email', 'tipo'));
		if ($this->usuario->save()) {
			return \Redirect::route('admin.usuario.index');
		}
	}

	public function destroy(Request $request, $id)
	{
		abort(500);
		$mensaje = $this->usuario->perfil->nombre_completo.' Fue Eliminado Correctamente';
		$this->usuario->delete($id);

		if ($request->ajax()) {
			return response()->json([
				'message' => $mensaje
			]);
		}

		$this->session->flash('message', $mensaje);
		return \Redirect::route('admin.usuario.index');
	}

}
