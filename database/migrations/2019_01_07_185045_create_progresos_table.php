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
			$table->increments('id_progreso',10);
			$table->double('peso_corporal');
			$table->integer('estatura',11);
			$table->string('subescapular',20);
			$table->string('tricipital',20);
			$table->string('bicipital',20);
			$table->string('supra_iliaco',20);
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

			$table->integer('rut_cl')->unsigned();
			$table->foreign('rut_cl')->references('rut_cl')->on('clientes');
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
