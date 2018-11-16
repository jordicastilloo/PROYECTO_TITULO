<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateReservasTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('reservas', function(Blueprint $table)
		{
			$table->increments('id_reserva');
			$table->datetime('hora_inicio');
			$table->datetime('hora_fin');
			$table->datetime('fecha');
			$table->integer('clientes_rut_cliente');
			$table->integer('personal_rut_p');
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('reservas');
	}

}
