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
			$table->increments('id_acceso');
			$table->datatime('hora');
			$table->string('mes');
			$table->integer('ano');
			$table->integer('clientes_rut_cliente');
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
