<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateContratasTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('contratas', function(Blueprint $table)
		{
			$table->increments('id_insc');
			$table->datatime('inicio_insc');
			$table->int('pago_insc');
			$table->datatime('fin_insc');
			$table->int('planes_id_plan');
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('contratas');
	}

}