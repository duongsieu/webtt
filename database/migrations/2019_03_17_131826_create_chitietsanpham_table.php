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
			$table->string('khoiluong')->nullable();
			$table->string('kichthuoc')->nullable();
			$table->string('trucbanhxe')->nullable();
			$table->string('docaiyen')->nullable();
			$table->string('sanggamxe')->nullable();
			$table->string('binhxang')->nullable();
			$table->string('lopxe')->nullable();
			$table->string('congsuattoida')->nullable();
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
