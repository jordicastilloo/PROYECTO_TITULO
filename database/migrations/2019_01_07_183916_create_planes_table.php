<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePlanesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('planes', function(Blueprint $table)
		{
			$table->increments('id_plan',10);
			$table->string('nombre_plan',200);
			$table->int('precio_plan',15);
			$table->integer('duracion_plan',11);
			$table->integer('dias_gratis',11);
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('planes');
	}

}
