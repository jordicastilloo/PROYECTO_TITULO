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
			$table->datetime('inicio_insc');
			$table->integer('pago_insc');
			$table->datetime('fin_insc');
			$table->integer('planes_id_plan');
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
