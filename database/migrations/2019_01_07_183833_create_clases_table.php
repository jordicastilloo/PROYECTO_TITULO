<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateClasesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('clases', function(Blueprint $table)
		{
			$table->increments('id_clase',10);
			$table->string('nombre_clase',200);
			$table->string('descripcion_clase',500);
			$table->time('hora_inicio');
			$table->time('hora_fin');
			
			$table->integer('id_emp')->unsigned();
			$table->foreign('id_emp')->references('id_emp')->on('empresas');
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('clases');
	}

}
