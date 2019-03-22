<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class chitietsanpham extends Model {
	//
	protected $table = "chitietsanpham";
	public function sanpham() {
		return $this->belongsTo('App\sanpham', 'id_sanpham', 'id');
	}

}
