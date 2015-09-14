<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateJugadoresTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('jugadores', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('nombre');
			$table->string('apellido');
			$table->string('alias')->nullable();
			$table->integer('posicion_id')->unsigned();
			$table->foreign('posicion_id')->references('id')->on('catalogo')->onDelete('cascade');
			$table->integer('playera')->nullable();
			$table->string('telefono')->nullable();
			$table->string('celular')->nullable();
			$table->string('direccion')->nullable();
			$table->string('email')->nullable();
			$table->string('foto')->nullable();
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
		Schema::drop('jugadores');
	}

}
