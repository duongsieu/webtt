<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateImagesTable extends Migration {
	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up() {
		Schema::create('images', function (Blueprint $table) {
			$table->bigIncrements('id');
			$table->timestamps();
			$table->string('img');
			$table->bigInteger('id_sanpham')->nullable();
			$table->bigInteger('id_tintuc')->nullable();
			$table->bigInteger('id_dichvu')->nullable();
			$table->string('chude')->nullable();
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down() {
		Schema::dropIfExists('images');
	}
}
