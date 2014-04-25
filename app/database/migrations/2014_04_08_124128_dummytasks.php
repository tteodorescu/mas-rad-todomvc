<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class DummyTasks extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
    /*     Schema::create('tasks', function($table)
     {
       $table->increments('id');
       $table->string('name', 255);
       $table->timestamps();
     });*/
    
    /*  Schema::table('tasks', function($table)
    {
      $table->string('title');
      $table->boolean('done');
    });*/
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
    /*Schema::drop('tasks');*/
	}

}
