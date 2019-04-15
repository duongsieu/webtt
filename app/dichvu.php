<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;

class dichvu extends Model {
	//
	protected $table = "dichvu";
	public function images() {
		return $this->hasMany('App\image', 'id_sanpham', 'id');
	}
	public function add(Request $request) {
		$this->tendv = $request->tendv;
		$this->tomtat = $request->tomtat;
		$this->noidung = $request->noidung;

		$this->save();
	}
}
