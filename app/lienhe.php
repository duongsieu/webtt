<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;

class lienhe extends Model {
	//
	protected $table = "lienhe";
	public function add(Request $request) {
		$this->ten = $request->ten;
		$this->sdt = $request->sdt;
		$this->noidung = $request->noidung;
		$this->save();
	}
}
