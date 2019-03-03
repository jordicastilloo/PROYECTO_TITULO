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
			$table->integer('rut_cl')->unsigned();
			$table->primary('rut_cl');
			$table->string('nombre_cliente');
			$table->string('ap_pat_cliente');
			$table->string('ap_mat_cliente');
			$table->string('direccion_cliente');
			$table->integer('telefono_cliente');
			$table->string('email_cliente');
			$table->string('huella_cliente');
			$table->string('contrasena_cliente');
			$table->string('nacionalidad_cliente');
			$table->date('fecha_nac_cliente');
			$table->string('sexo_cliente');
			$table->string('alergia_cliente');
			$table->string('patologia_cliente');
			$table->string('fotografia_cliente');
			$table->integer('estado');
			/*
			$table->integer('id_emp')->unsigned();
			$table->foreign('id_emp')->references('id_emp')->on('empresas');
			*/
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
