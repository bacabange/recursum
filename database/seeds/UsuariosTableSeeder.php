<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class UsuariosTableSeeder extends Seeder {

	public function run()
	{
		$faker = Faker::create();

		for ($i=0; $i < 30; $i++) { 
			
			$id = \DB::table('usuario')->insertGetId([
				'nombre' => $faker->firstName,
				'apellido' => $faker->lastName,
				'username' => $faker->userName,
				'email' => $faker->unique()->email,
				'password' => \Hash::make('123456'),
				'tipo' => 'user'
				]);

			\DB::table('usuario_perfil')->insert([
				'bio' => $faker->paragraph(rand(2, 5)),
				'web' =>$faker->domainName,
				'twitter' => $faker->userName,
				'id_usuario' => $id
				]);
		}

	}

}