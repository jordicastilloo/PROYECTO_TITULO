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
			$table->string('subescapular');
			$table->string('tricipital');
			$table->string('bicipital');
			$table->string('supra_iliaco');
			$table->double('hombros');
			$table->double('pecho');
			$table->double('biceps_relajado');
			$table->double('biceps_contraido');
			$table->double('muneca');
			$table->double('cintura');
			$table->double('cadera');
			$table->double('muslo');
			$table->double('gemelo');
			$table->date('fecha_evaluacion');
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
