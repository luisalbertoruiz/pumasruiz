<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateCanchasTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('canchas', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('nombre');
			$table->string('locacion');
			$table->string('info');
			$table->string('latitud');
			$table->string('longitud');
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
		Schema::drop('canchas');
	}

}
