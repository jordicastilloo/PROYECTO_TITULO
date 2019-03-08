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
			$table->integer('rut_cl',10)->unsigned();
			$table->primary('rut_cl',10);
			$table->string('nombre_cliente',100);
			$table->string('ap_pat_cliente',100);
			$table->string('ap_mat_cliente',100);
			$table->string('direccion_cliente',200);
			$table->integer('telefono_cliente',11);
			$table->string('email_cliente'100);
			$table->string('huella_cliente',500);
			$table->string('contrasena_cliente',100);
			$table->string('nacionalidad_cliente',50);
			$table->date('fecha_nac_cliente');
			$table->string('sexo_cliente',50);
			$table->string('alergia_cliente',100);
			$table->string('patologia_cliente',100);
			$table->string('fotografia_cliente',100);
			$table->integer('estado',1);
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
