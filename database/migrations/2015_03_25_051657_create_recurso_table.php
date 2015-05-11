<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRecursoTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('recurso', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('titulo');
			$table->string('slug');
			$table->text('url');
			$table->text('descripcion');
			$table->enum('estado', ['active', 'inactive']);
			$table->integer('id_imagen')->unsigned();
			$table->integer('id_categoria')->unsigned();
			$table->integer('id_tipo')->unsigned();
			$table->integer('id_usuario')->unsigned();

			$table->integer('numero_vistas');
			$table->integer('numero_clicks');

			$table->foreign('id_imagen')->references('id')->on('recurso_imagen')->onDelete('cascade');
			$table->foreign('id_categoria')->references('id')->on('recurso_categoria')->onDelete('cascade');
			$table->foreign('id_tipo')->references('id')->on('recurso_tipo')->onDelete('cascade');
			$table->foreign('id_usuario')->references('id')->on('usuario')->onDelete('cascade');

			$table->timestamps();
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('recurso');
	}

}
