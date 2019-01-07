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
			
			$table->integer('id_plan')->unsigned();
			$table->foreign('id_plan')->references('id_plan')->on('planes');
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
		Schema::drop('contratas');
	}

}
