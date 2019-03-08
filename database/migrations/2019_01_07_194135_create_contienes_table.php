<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateContienesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('contienes', function(Blueprint $table)
		{
			$table->increments('id_cont',10);
			$table->integer('id_rutina')->unsigned();
			$table->foreign('id_rutina')->references('id_rutina')->on('rutinas');
			$table->integer('id_ejercicio')->unsigned();
			$table->foreign('id_ejercicio')->references('id_ejercicio')->on('ejercicios');
			$table->string('dia',20);
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('contienes');
	}

}
