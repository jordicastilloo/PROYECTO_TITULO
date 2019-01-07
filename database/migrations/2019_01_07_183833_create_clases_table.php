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
			$table->increments('id_clase');
			$table->string('nombre_clase');
			$table->string('descripcion_clase');
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
