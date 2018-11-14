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
			$table->int('estatura');
			$table->int('subescapular');
			$table->int('tricipital');
			$table->int('supra_iliaco');
			$table->int('hombros');
			$table->int('pecho');
			$table->int('biceps_relajado');
			$table->int('biceps_contraido');
			$table->int('muneca');
			$table->int('cintura');
			$table->int('cadera');
			$table->int('muslo');
			$table->int('gemelo');
			$table->datatime('fecha_evaluacion');
			$table->int('clientes_rut_cliente');
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
