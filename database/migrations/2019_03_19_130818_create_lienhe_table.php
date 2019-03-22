<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLienheTable extends Migration {
	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up() {
		Schema::create('lienhe', function (Blueprint $table) {
			$table->bigIncrements('id');
			$table->timestamps();
			$table->string('ten');
			$table->integer('sdt');
			$table->string('noidung');
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down() {
		Schema::dropIfExists('lienhe');
	}
}
