<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreatePartidosTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('partidos', function(Blueprint $table)
		{
			$table->increments('id');
			$table->integer('equipo_id')->unsigned();
			$table->foreign('equipo_id')->references('id')->on('equipos');
			$table->integer('fecha');
			$table->string('cancha');
			$table->time('horario');
			$table->date('dia');
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
		Schema::drop('partidos');
	}

}
