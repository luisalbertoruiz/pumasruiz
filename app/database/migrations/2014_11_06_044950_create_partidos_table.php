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
			$table->foreign('equipo_id')->references('id')->on('equipos')->onDelete('cascade');
			$table->integer('torneo_id')->unsigned();
			$table->foreign('torneo_id')->references('id')->on('torneos')->onDelete('cascade');
			$table->integer('cancha_id')->unsigned();
			$table->foreign('cancha_id')->references('id')->on('canchas')->onDelete('cascade');
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
