<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateChitiethoadonTable extends Migration {
	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up() {
		Schema::create('chitiethoadon', function (Blueprint $table) {
			$table->bigIncrements('id');
			$table->timestamps();
			$table->bigInteger('id_bill');
			$table->float('unit_price');
			$table->integer('soluong');
			$table->bigInteger('id_product');
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down() {
		Schema::dropIfExists('chitiethoadon');
	}
}
