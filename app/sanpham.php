<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class sanpham extends Model {
	//
	protected $table = "sanpham";
	public function theloai() {
		return $this->belongsTo('App\theloai', 'id_type', 'id');
	}
	public function chitiethoadon() {
		return $this->hasMany('App\chitiethoadon', 'id_product', 'id');
	}
	public function chitietsanpham() {
		return $this->belongsTo('App\chitietsanpham', 'id_sanpham', 'id');
	}
	public function binhluan() {
		return $this->hasMany('App\binhluan', 'id_sanpham', 'id');
	}
	public function images() {
		return $this->hasMany('App\images', 'id_sanpham', 'id');
	}

}
