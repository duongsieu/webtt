<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class hoadon extends Model {
	//
	protected $table = "hoadon";
	public function chitiethoadon() {
		return $this->hasMany('App\chitiethoadon', 'id_bill', 'id');
	}
	public function User() {
		$this->belongsTo('App\User', 'id_user', 'id');
	}
}
