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
			$table->integer('tipoTorneo_id')->unsigned();
			$table->foreign('tipoTorneo_id')->references('id')->on('catalogo')->onDelete('cascade');
			$table->integer('competicion_id')->unsigned();
			$table->foreign('competicion_id')->references('id')->on('catalogo')->onDelete('cascade');
			$table->integer('enfrentamiento_id')->unsigned();
			$table->foreign('enfrentamiento_id')->references('id')->on('catalogo')->onDelete('cascade');
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
