<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', 'PanelController@index');

Route::controllers([
	'usuario' => 'UsuarioController',
	'auth' => 'Auth\AuthController'
]);

Route::group(['prefix' => 'admin', 'middleware' => ['auth', 'is_admin'], 'namespace' => 'Admin'], function ()
{
	Route::resource('usuario', 'UsuarioController');
	Route::resource('recurso', 'RecursoController');
});
