<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTintucTable extends Migration {
	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up() {
		Schema::create('tintuc', function (Blueprint $table) {
			$table->bigIncrements('id');
			$table->timestamps();
			$table->string('tieude');
			$table->string('tomtat');
			$table->string('noidung');
			$table->string('img');
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down() {
		Schema::dropIfExists('tintuc');
	}
}
