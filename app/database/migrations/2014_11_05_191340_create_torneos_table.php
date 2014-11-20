<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateTorneosTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('torneos', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('nombre');
			$table->integer('fechas');
			$table->string('tipo');
			$table->string('competicion');
			$table->string('enfrentamiento');
			$table->date('finicio');
			$table->date('ffinal');
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
		Schema::drop('torneos');
	}

}
