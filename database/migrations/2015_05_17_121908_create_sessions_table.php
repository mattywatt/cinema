<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSessionsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('sessions', function(Blueprint $table)
		{
			$table->increments('id');
			$table->integer('movie_id')->unsigned();
			$table->integer('cinema_id')->unsigned();
			$table->date('datetime');
			$table->timestamps();

			$table->foreign('movie_id')
				  ->references('id')
				  ->on('movies')
				  ->onDelete('cascade');

			$table->foreign('cinema_id')
				  ->references('id')
				  ->on('cinemas')
				  ->onDelete('cascade');

		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('sessions');
	}

}
