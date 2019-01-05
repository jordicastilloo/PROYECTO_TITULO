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
			$table->integer('rut_cliente');
			$table->string('nombre_cliente');
			$table->string('ap_pat_cliente');
			$table->string('ap_mat_cliente');
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
			
			$table->integer('empresa_id_emp')->unsigned();
			$table->foreign('empresa_id_emp')->references('id_emp')->on('empresas');
			$table->integer('contrata_id_insc')->unsigned();
			$table->foreign('contrata_id_insc')->references('id_insc')->on('contrata_id_insc');
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
		Schema::table('clientes', function (Blueprint $table) {
            $table->dropForeign('clientes_empresas_contratas_id_emp_id_insc_foreign');
        });
	}
	

}
