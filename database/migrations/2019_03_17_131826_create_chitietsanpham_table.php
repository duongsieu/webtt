<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateChitietsanphamTable extends Migration {
	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up() {
		Schema::create('chitietsanpham', function (Blueprint $table) {
			$table->bigIncrements('id');
			$table->timestamps();
			$table->string('khoiluong');
			$table->string('kichthuoc');
			$table->string('trucbanhxe');
			$table->string('docaiyen');
			$table->string('sanggamxe');
			$table->string('binhxang');
			$table->string('lopxe');
			$table->string('congsuattoida');
			$table->bigInteger('id_sanpham');
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down() {
		Schema::dropIfExists('chitietsanpham');
	}
}
