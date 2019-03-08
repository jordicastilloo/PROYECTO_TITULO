<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRutinasTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('rutinas', function(Blueprint $table)
		{
			$table->increments('id_rutina',10);
			$table->string('nombre_rutina',200);
			$table->string('desc_rutina',200);

			$table->integer('rut_cl')->unsigned();
			$table->foreign('rut_cl')->references('rut_cl')->on('clientes');
			$table->integer('rut_p')->unsigned();
			$table->foreign('rut_p')->references('rut_p')->on('personals');
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('rutinas');
	}

}
