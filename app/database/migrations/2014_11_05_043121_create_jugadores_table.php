<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateJugadorsTable extends Migration {

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
			$table->string('sobrenombre')->nullable();
			$table->string('posicion');
			$table->integer('numero');
			$table->string('telefono')->nullable();
			$table->string('celular')->nullable();
			$table->string('direccion')->nullable();
			$table->string('email')->nullable();
			$table->string('foto');
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
