<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProgresosTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('progresos', function(Blueprint $table)
		{
			$table->increments('id_progreso');
			$table->double('peso_corporal');
			$table->integer('estatura');
			$table->integer('subescapular');
			$table->integer('tricipital');
			$table->integer('supra_iliaco');
			$table->integer('hombros');
			$table->integer('pecho');
			$table->integer('biceps_relajado');
			$table->integer('biceps_contraido');
			$table->integer('muneca');
			$table->integer('cintura');
			$table->integer('cadera');
			$table->integer('muslo');
			$table->integer('gemelo');
			$table->datatime('fecha_evaluacion');
			$table->integer('clientes_rut_cliente');
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('progresos');
	}

}
