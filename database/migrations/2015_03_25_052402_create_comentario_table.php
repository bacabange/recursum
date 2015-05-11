<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateComentarioTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('comentario', function(Blueprint $table)
		{
			$table->increments('id');
			$table->text('enunciado');
			$table->integer('id_usuario')->unsigned();
			$table->integer('id_recurso')->unsigned();

			$table->foreign('id_recurso')->references('id')->on('recurso')->onDelete('cascade');
			$table->foreign('id_usuario')->references('id')->on('usuario');
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
		Schema::drop('comentario');
	}

}
