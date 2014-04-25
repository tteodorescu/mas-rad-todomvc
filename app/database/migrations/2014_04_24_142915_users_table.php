<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class UsersTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
    if (!Schema::hasTable('users'))
    {    
		  Schema::create('users', function($table)
      {
        $table->increments('id');
        $table->string('email');
        $table->string('username');
        $table->string('password');
        $table->timestamps();
      });
    }
    
    if (!Schema::hasTable('tasks'))
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
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
    if (Schema::hasTable('users'))
    {    
      Schema::drop('users');
    }
    
    if (Schema::hasTable('tasks'))
    {
      Schema::drop('tasks');
    }
	}

}
