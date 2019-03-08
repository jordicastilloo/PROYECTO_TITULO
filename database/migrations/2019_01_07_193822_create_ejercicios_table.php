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
			$table->increments('id_ejercicio',10);
			$table->string('nombre',100);
			$table->string('fotografia',100);
			$table->string('video',500);
			$table->string('descripcion',500);
			$table->string('clasificacion',50);
			$table->string('repeticiones',20);
			$table->integer('series',11);
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
