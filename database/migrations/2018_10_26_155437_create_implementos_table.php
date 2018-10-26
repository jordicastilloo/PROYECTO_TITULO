<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateImplementosTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public $timestamps = false;

	public function up()
	{

		Schema::create('implementos', function(Blueprint $table)
		{
			$table->increments('idimplemento');
			$table->string('nombre');
			$table->string('estado');
			$table->string('tipo');
			$table->timestamps();
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
