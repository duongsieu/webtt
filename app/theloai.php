<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;

class theloai extends Model {
	//
	protected $table = "theloai";

	public function sanpham() {
		return $this->hasMany('App\sanpham', 'id_type', 'id');
	}
	public function add(Request $request) {
		$this->name = $request->name;
		$this->save();
	}
}