<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePersonalsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('personals', function(Blueprint $table)
		{
			$table->integer('rut_p');
			$table->string('tipo_p');
			$table->string('nombre_p');
			$table->string('ap_pat_p');
			$table->string('ap_mat_p');
			$table->integer('telefono');
			$table->string('email_p');
			$table->string('contrasena_p');
			$table->string('nacionalidad_p');
			$table->datetime('fecha_nac_p');
			$table->string('sexo_p');
			$table->string('profresion_p');
			$table->string('fotografia_p');
			$table->integer('empresa_id_emp');
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('personals');
	}

}
