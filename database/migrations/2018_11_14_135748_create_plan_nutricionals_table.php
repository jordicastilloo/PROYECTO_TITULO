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
		Schema::create('plan_nutricionals', function(Blueprint $table)
		{
			$table->increments('id_plan_nut');
			$table->string('nombre_plan_nut');
			$table->string('descripcion_plan_nut');
			$table->string('personal_rut_p');
			$table->int('clientes_rut_cliente');

		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('plan_nutricionals');
	}

}
