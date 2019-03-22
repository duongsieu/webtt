<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHoadonTable extends Migration {
	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up() {
		Schema::create('hoadon', function (Blueprint $table) {
			$table->bigIncrements('id');
			$table->timestamps();
			$table->integer('id_user');
			$table->date('ngay');
			$table->integer('tonghoadon');
			$table->string('note');
			$table->string('status');
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down() {
		Schema::dropIfExists('hoadon');
	}
}
