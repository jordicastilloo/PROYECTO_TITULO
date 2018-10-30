<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePersonasTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('personas', function(Blueprint $table)
		{
			$table->string('RutPersona');
			$table->string('Nombre');
			$table->string('Apellido_Materno');
			$table->string('Apellido_Paterno');
			$table->string('Telefono');
			$table->string('Email');
			$table->string('Tipo');
			$table->string('Huella');
			$table->string('Nacionalidad');
			$table->datetime('Fecha_nacimiento');
			$table->string('Sexo');
			$table->string('Alergico');
			$table->string('Patologia');
			$table->string('Fotografia');
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('personas');
	}

}
