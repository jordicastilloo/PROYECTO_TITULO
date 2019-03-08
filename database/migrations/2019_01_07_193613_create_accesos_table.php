<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAccesosTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('accesos', function(Blueprint $table)
		{
			$table->increments('id_acceso',10);
			$table->datetime('fecha');
			
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
		Schema::drop('accesos');
	}

}
