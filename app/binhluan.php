<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class binhluan extends Model {
	//
	protected $table = "binhluan";
	public function user() {
		return $this->belongsTo('App\user', 'id_user', 'id');
	}
	public function sanpham() {
		return $this->belongsTo('App\sanpham', 'id_sanpham', 'id');
	}
}
