<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class theloai extends Model {
	//
	protected $table = "theloai";

	public function sanpham() {
		return $this->hasMany('App\sanpham', 'id_type', 'id');
	}
}