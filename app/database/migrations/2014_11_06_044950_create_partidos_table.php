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
			$table->integer('torneo_id')->unsigned();
			$table->foreign('torneo_id')->references('id')->on('torneos');
			$table->string('cancha');
			$table->date('dia');
			$table->time('horario');
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
