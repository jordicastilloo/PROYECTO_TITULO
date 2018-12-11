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
			$table->integer('empresa_id_emp');
			$table->integer('tipo_id_tip');

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
	}

}
