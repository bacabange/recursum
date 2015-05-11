<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRecursoTagsPivotTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('recurso_tags_pivot', function(Blueprint $table)
		{
			$table->increments('id');
			$table->integer('id_recurso')->unsigned();
			$table->integer('id_tag')->unsigned();

			$table->foreign('id_recurso')->references('id')->on('recurso')->onDelete('cascade');
			$table->foreign('id_tag')->references('id')->on('recurso_tags')->onDelete('cascade');
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
		Schema::drop('recurso_tags_pivot');
	}

}
