<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateImplementosTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	//public $timestamps = false;

	public function up()
	{

		Schema::create('implementos', function(Blueprint $table)
		{
			$table->increments('id_implemento');
			$table->string('nombre');
			$table->string('estado');
			//$table->string('tipo');
			$table->integer('stock');
			$table->date('fecha_ingreso');
			$table->string('subcategoria');
		
			$table->integer('empresa_id_emp')->unsigned();
			$table->foreign('empresa_id_emp')->references('id_emp')->on('empresas');
			$table->integer('tipo_id_tip')->unsigned();
			$table->foreign('tipo_id_tip')->references('id_tipo')->on('tipos');

		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('implementos');
		Schema::table('implementos', function (Blueprint $table) {
            $table->dropForeign('implementos_empresas_tipos_id_emp_id_tipo_foreign');
        });
	}

}
