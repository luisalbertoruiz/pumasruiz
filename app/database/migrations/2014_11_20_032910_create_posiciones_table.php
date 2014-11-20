<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreatePosicionesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('posiciones', function(Blueprint $table)
		{
			$table->increments('id');
			$table->integer('equipo_id')->unsigned();
			$table->foreign('equipo_id')->references('id')->on('equipos');
			$table->integer('fecha');
			$table->integer('goles_f');
			$table->integer('goles_c');
			$table->integer('torneo_id')->unsigned();
			$table->foreign('torneo_id')->references('id')->on('torneos');
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
		Schema::drop('posiciones');
	}

}
