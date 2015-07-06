<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateResultadosTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('resultados', function(Blueprint $table)
		{
			$table->increments('id');
			$table->integer('local_id')->unsigned();
			$table->foreign('local_id')->references('id')->on('equipos');
			$table->integer('visitante_id')->unsigned();
			$table->foreign('visitante_id')->references('id')->on('equipos');
			$table->integer('goles_l');
			$table->integer('goles_v');
			$table->integer('torneo_id')->unsigned();
			$table->foreign('torneo_id')->references('id')->on('torneos');
			$table->integer('fecha');
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
		Schema::drop('resultados');
	}

}
