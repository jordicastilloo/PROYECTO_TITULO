<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePersonalsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('personals', function(Blueprint $table)
		{
			$table->integer('rut_p');
			$table->string('tipo_p');
			$table->string('nombre_p');
			$table->string('ap_pat_p');
			$table->string('ap_mat_p');
			$table->integer('telefono_p');
			$table->string('email_p');
			$table->string('contrasena_p');
			$table->string('nacionalidad_p');
			$table->date('fecha_nac_p');
			$table->string('sexo_p');
			$table->string('profesion_p');
			$table->string('fotografia_p');
			$table->integer('empresa_id_emp')->unsigned();
			$table->foreign('empresa_id_emp')->references('id_emp')->on('empresas');
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('personals');
		Schema::table('personals', function (Blueprint $table) {
            $table->dropForeign('personals_empresas_id_emp_foreign');
        });
	}
	/*public function onDelete()
	{
	$table->foreign('category_id')
      ->references('id')->on('categories')
      ->onDelete('cascade');
	}*/

}
