<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateMarcadoresTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('marcadores', function(Blueprint $table)
		{
			$table->increments('id');
			$table->integer('partido_id')->unsigned();
			$table->foreign('partido_id')->references('id')->on('partidos')->onDelete('cascade');
			$table->integer('goles_f');
			$table->integer('goles_c');
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
		Schema::drop('marcadores');
	}

}
