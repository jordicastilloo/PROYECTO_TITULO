<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateImplementosTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('implementos', function(Blueprint $table)
		{
			$table->increments('id_implemento',10);
			$table->string('nombre',100);
			$table->string('estado',50);
			$table->string('tipo',50);
			$table->integer('stock',20);
			$table->date('fecha_ingreso');
			$table->string('subcategoria',50);

			$table->integer('id_emp')->unsigned();
			$table->foreign('id_emp')->references('id_emp')->on('empresas');
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
