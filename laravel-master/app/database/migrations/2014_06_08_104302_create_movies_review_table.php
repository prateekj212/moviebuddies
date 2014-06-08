<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMoviesReviewTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('movie_review', function(Blueprint $table)
		{
			$table->increments('id');
                        $table->integer('movie_id')->unsigned();
			$table->foreign('movie_id')
			    ->references('id')->on('movies')
			    ->onDelete('cascade')
			    ->onUpdate('cascade');
                        $table->integer('user_id')->unsigned();
			$table->foreign('user_id')
			    ->references('id')->on('users')
			    ->onDelete('cascade')
			    ->onUpdate('cascade');
                        $table->string('review',65535);
                        $table->integer('rating')->unsigned();
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
		Schema::drop('movie_review');
	}

}
