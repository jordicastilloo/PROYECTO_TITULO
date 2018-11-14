<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateContsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('conts', function(Blueprint $table)
		{
			$table->increments('id_cont');
			$table->int('rutinas_id_rutina');
			$table->int('ejercicios_id_ejercicio');
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('conts');
	}

}
