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
			$table->integer('rut_p',10)->unsigned();
			$table->primary('rut_p',10);
			$table->string('tipo_p',50);
			$table->string('nombre_p',100);
			$table->string('ap_pat_p',100);
			$table->string('ap_mat_p',100);
			$table->string('direccion_p',200);
			$table->integer('telefono_p',11);
			$table->string('email_p',100);
			$table->string('contrasena_p',100);
			$table->string('nacionalidad_p',50);
			$table->date('fecha_nac_p');
			$table->string('sexo_p',50);
			$table->string('profesion_p',100);
			$table->string('fotografia_p',100);
			$table->integer('estado',1);
			//$table->integer('id_emp')->unsigned();
			//$table->foreign('id_emp')->references('id_emp')->on('empresas');
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
