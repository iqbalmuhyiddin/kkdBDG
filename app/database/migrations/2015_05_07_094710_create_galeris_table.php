<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateGalerisTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		//
		Schema::create('galeri', function($table)
		{ 
		   $table->increments('id');
		   $table->string('judul');  
		   $table->integer('user');
		   $table->text('keterangan');
		   $table->string('file');
		   $table->string('jenis');
		   //$table->foreign('user')->references('id')->on('users');
		   $table->timestamps();
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
		Schema::drop('galeri');
	}

}
