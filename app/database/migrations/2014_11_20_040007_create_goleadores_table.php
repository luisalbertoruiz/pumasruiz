<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateGoleadoresTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('goleadores', function(Blueprint $table)
		{
			$table->increments('id');
			$table->integer('jugador_id')->unsigned();
			$table->foreign('jugador_id')->references('id')->on('jugadores')->onDelete('cascade');
			$table->integer('partido_id')->unsigned();
			$table->foreign('partido_id')->references('id')->on('partidos')->onDelete('cascade');
			$table->integer('goles');
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
		Schema::drop('goleadores');
	}

}
