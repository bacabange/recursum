<?php 

use Illuminate\Database\Seeder;

class AdminTableSeeder extends Seeder
{
	
	public function run()
	{
		$id = \DB::table('usuario')->insertGetId([
			'nombre' => 'Stiven',
			'apellido' => 'Castillo',
			'username' => 'bacabange',
			'email' => 's@imosai.co',
			'password' => \Hash::make('123456'),
			'tipo' => 'admin',
		]);

		\DB::table('usuario_perfil')->insert([
			'bio' => 'Desarrollador y Diseñador Web',
			'web' => 'stiven.imosai.co',
			'twitter' => 'bacabange',
			'id_usuario' => $id
		]);
	}
}