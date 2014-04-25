<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class MyTasksCreation extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
     Schema::create('tasks', function($table)
     {
       $table->increments('id');
       $table->string('name', 255);
       $table->timestamps();
       $table->string('title');
       $table->boolean('done');     
     });
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
    Schema::drop('tasks');
	}

}
