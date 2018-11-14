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
			$table->increments('id_rutina');
			$table->string('nombre_rutina');
			$table->string('desc_rutina');
			$table->int('series');
			$table->int('repeticiones');
			$table->int('personal_rut_p');
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
		Schema::drop('rutinas');
	}

}
