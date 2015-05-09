<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProduksTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		//
		Schema::create('produk', function($table)
		{ 
		   $table->increments('id');
		   $table->string('nama');
		   $table->string('jenis');
		   $table->integer('harga');
		   $table->text('isi_testimoni');
		   $table->text('det_produk');
		   $table->string('gambar');
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
		Schema::drop('produk');
	}

}
