<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEjerciciosTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('ejercicios', function(Blueprint $table)
		{
			$table->increments('id_ejercicio');
			$table->string('nombre');
			$table->string('fotografia');
			$table->string('video');
			$table->string('descripcion');
			$table->string('clasificacion');
			$table->string('tipo');
			$table->string('repeticiones');
			$table->integer('series');
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('ejercicios');
	}

}
