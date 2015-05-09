<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFilesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		//
		Schema::create('file', function($table)
		{ 
		   $table->increments('id');
		   $table->integer('user');		 
		   $table->string('file');		   
		   $table->timestamps();
		    //$table->foreign('user')->references('id')->on('users');
		}
		);
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		//
		Schema::drop('file');
	}

}
