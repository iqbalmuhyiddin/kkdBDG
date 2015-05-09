<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePemesanansTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		//
		Schema::create('pemesanan', function($table)
		{ 
		   $table->increments('id');
		   $table->string('nama');
		   $table->string('pengenal');
		   $table->integer('id_produk');
		   $table->string('jenis_pesan');
		   $table->string('status_pesan');
		   $table->date('tgl_terima');	
		   //$table->foreign('id_produk')->references('id')->on('produk');	   
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
		Schema::drop('pemesanan');
	}

}
