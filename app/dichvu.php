<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class dichvu extends Model {
	//
	protected $table = "dichvu";
	public function images() {
		return $this->hasMany('App\image', 'id_sanpham', 'id');
	}
}
