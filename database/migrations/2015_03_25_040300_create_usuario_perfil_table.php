<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsuarioPerfilTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('usuario_perfil', function(Blueprint $table)
		{
			$table->increments('id');
			$table->mediumText('bio')->nullable();
			$table->string('twitter')->nullable();
			$table->string('web')->nullable();
			$table->integer('id_usuario')->unsigned();
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
		Schema::drop('usuario_perfil');
	}

}
