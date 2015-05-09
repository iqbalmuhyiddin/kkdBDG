<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePostsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		//
		Schema::create('post', function($table)
		{ 
		   $table->increments('id');
		   $table->string('Judul');  
		   $table->text('isi_artikel');  
   		   $table->integer('author');
		   $table->string('password');
		   $table->string('file_gambar');
		   $table->string('jenis');		  
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
		Schema::drop('post');
	}

}
