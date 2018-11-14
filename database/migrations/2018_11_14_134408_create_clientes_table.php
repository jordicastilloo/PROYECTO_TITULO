<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateClientesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('clientes', function(Blueprint $table)
		{
			$table->int('rut_cliente');
			$table->string('nombre_cliente');
			$table->string('ap_pat_cliente');
			$table->string('ap_mat_cliente');
			$table->int('telefono_cliente');
			$table->string('email_cliente');
			$table->string('contrasena_cliente');
			$table->string('nacionalidad_cliente');
			$table->string('fecha_nac_cliente');
			$table->string('sexo_cliente');
			$table->string('alergia_cliente');
			$table->string('patologia_cliente');
			$table->string('fotografia_cliente');
			$table->int('empresa_id_emp');
			$table->int('contrata_id_insc');
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('clientes');
	}

}
