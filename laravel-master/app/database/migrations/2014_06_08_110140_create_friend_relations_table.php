<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFriendRelationsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('friend_relations', function(Blueprint $table)
		{
			$table->increments('id');
                        $table->integer('user_id')->unsigned();
			$table->foreign('user_id')
			    ->references('id')->on('users')
			    ->onDelete('cascade')
			    ->onUpdate('cascade');                        
                        $table->integer('user_friend_id')->unsigned();
			$table->foreign('user_friend_id')
			    ->references('id')->on('users')
			    ->onDelete('cascade')
			    ->onUpdate('cascade');
                        
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
		Schema::drop('friend_relations');
	}

}
