<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class chitiethoadon extends Model {
	//
	protected $table = "chitiethoadon";
	public function sanpham() {
		return $this->belongsTo('App\sanpham', 'id_product', 'id');
	}
	public function hoadon() {
		return $this->belongsTo('App\hoadon', 'id_bill', 'id');
	}
}
