<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePlanNutricionalsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('plan__nutricionals', function(Blueprint $table)
		{
			$table->increments('id_plan_nut');
			$table->string('nombre_plan_nut');
			$table->string('descripcion_plan_nut');

			$table->integer('rut_p')->unsigned();
			$table->foreign('rut_p')->references('rut_p')->on('personals');

			$table->integer('rut_cl')->unsigned();
			$table->foreign('rut_cl')->references('rut_cl')->on('clientes');

		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('plan__nutricionals');
	}

}
