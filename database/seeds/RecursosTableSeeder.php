<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use App\Recurso;

use Laracasts\TestDummy\Factory as TestDummy;

class RecursosTableSeeder extends Seeder {

	protected $recurso;

	public function __construct(Recurso $recurso)
	{
		$this->recurso = $recurso;
	}

	public function run()
	{
		$faker = Faker::create();

		\DB::table('recurso_categoria')->insertGetId(['nombre' => 'Backend', 'id_padre' => 0, 'descripcion' => 'Desarrollo web']);
		\DB::table('recurso_categoria')->insertGetId(['nombre' => 'Frontend', 'id_padre' => 0, 'descripcion' => 'Diseño e Interacción web']);
		\DB::table('recurso_categoria')->insertGetId(['nombre' => 'Apps', 'id_padre' => 0, 'descripcion' => 'Desarrollo y Diseño de Aplicaciones Moviles']);
		\DB::table('recurso_categoria')->insertGetId(['nombre' => 'Articulos', 'id_padre' => 0, 'descripcion' => 'Desarrollo y Diseño de Aplicaciones Moviles']);
		\DB::table('recurso_categoria')->insertGetId(['nombre' => 'Tutoriales', 'id_padre' => 0, 'descripcion' => 'Tutoriales']);
		\DB::table('recurso_categoria')->insertGetId(['nombre' => 'Sin Categoría', 'id_padre' => 0, 'descripcion' => 'Recurso sin categoría']);
			// Desarrollo
			\DB::table('recurso_categoria')->insertGetId(['nombre' => 'Herramientas', 'id_padre' => 1, 'descripcion' => 'Herramientas para código']);
			\DB::table('recurso_categoria')->insertGetId(['nombre' => 'Frameworks', 'id_padre' => 1, 'descripcion' => 'Información, Documentación, Packages, Etc.']);
			\DB::table('recurso_categoria')->insertGetId(['nombre' => 'Editores de Texto', 'id_padre' => 1, 'descripcion' => 'Información, Documentación, Packages, Etc.']);
			\DB::table('recurso_categoria')->insertGetId(['nombre' => 'Javascrip', 'id_padre' => 1, 'descripcion' => 'Plugins, Frameworks, Librerias, Etc.']);
			\DB::table('recurso_categoria')->insertGetId(['nombre' => 'CSS/CSS3', 'id_padre' => 1, 'descripcion' => 'Todo lo relacionado con hojas de estilo.']);
			// Diseño
			\DB::table('recurso_categoria')->insertGetId(['nombre' => 'Diseño UX', 'id_padre' => 0, 'descripcion' => 'Diseño de experiencias']);
			\DB::table('recurso_categoria')->insertGetId(['nombre' => 'Inspiración', 'id_padre' => 2, 'descripcion' => 'Galerias de Inspiración para diseños']);
			\DB::table('recurso_categoria')->insertGetId(['nombre' => 'Color', 'id_padre' => 2, 'descripcion' => 'Colores, Paletas.']);
			\DB::table('recurso_categoria')->insertGetId(['nombre' => 'Vectores', 'id_padre' => 2, 'descripcion' => 'Galerias de vectores.']);
			\DB::table('recurso_categoria')->insertGetId(['nombre' => 'Tipógrafías', 'id_padre' => 2, 'descripcion' => 'Tipografías.']);
			\DB::table('recurso_categoria')->insertGetId(['nombre' => 'Imágenes', 'id_padre' => 2, 'descripcion' => 'Galeria de Imagenes.']);
			// Apps
			\DB::table('recurso_categoria')->insertGetId(['nombre' => 'Patterns', 'id_padre' => 3, 'descripcion' => 'Inspiracion en otras aplicaciones']);
			\DB::table('recurso_categoria')->insertGetId(['nombre' => 'Android', 'id_padre' => 3, 'descripcion' => 'Apps Android']);
			\DB::table('recurso_categoria')->insertGetId(['nombre' => 'iOS', 'id_padre' => 3, 'descripcion' => 'Apps. ipad, iphone, etc.']);
			// Articulos
			\DB::table('recurso_categoria')->insertGetId(['nombre' => 'Blogs', 'id_padre' => 4, 'descripcion' => 'Articulo en blogs.']);
			\DB::table('recurso_categoria')->insertGetId(['nombre' => 'Ebooks', 'id_padre' => 4, 'descripcion' => 'Ebooks referentes al diseño y desarrollo web.']);
			\DB::table('recurso_categoria')->insertGetId(['nombre' => 'Conferencias', 'id_padre' => 4, 'descripcion' => 'Videos de conferencias, charlas, cursos.']);

		\DB::table('recurso_tipo')->insertGetId(['nombre' => 'Gratis']);
		\DB::table('recurso_tipo')->insertGetId(['nombre' => 'De Pago']);
		// Tags
		foreach(range(1, 10) as $index)
		{
			\DB::table('recurso_tags')->insertGetId(['nombre' => $faker->word()]);
		}

		for ($i=0; $i < 30; $i++) {
			$titulo = $faker->sentence(3);
			$imagen = \DB::table('recurso_imagen')->insertGetId(['nombre' => $faker->word(), 'url' => $faker->imageUrl(400, 200)]);

			$id = \DB::table('recurso')->insertGetId([
				'titulo' => $titulo,
				'slug' => \Slugify::slugify($titulo),
				'url' => $faker->url,
				'descripcion' => $faker->text(),
				'id_imagen' => $imagen,
				'estado' => $faker->randomElement(['active', 'inactive']),
				'id_categoria' => $faker->numberBetween(1, 22),
				'id_tipo' => $faker->randomElement([1, 2]),
				'id_usuario' => $faker->numberBetween(1, 20),
				'numero_vistas' => $faker->randomDigit,
				'numero_clicks' => $faker->randomDigit
			]);

			$recursotags = array(
				array('id_tag' => $faker->numberBetween(1,10), 'id_recurso' => $id)
			);

			\DB::table('recurso_tags_pivot')->insert($recursotags);
		}

		

	}

}