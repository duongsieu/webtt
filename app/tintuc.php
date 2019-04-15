<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;

class tintuc extends Model {
	//
	protected $table = "tintuc";
	public function images() {
		return $this->belongsTo('App\images', 'id_tintuc', 'id');
	}
	public function add(Request $request) {
		$this->tieude = $request->tieude;
		$this->tomtat = $request->tomtat;
		$this->noidung = $request->noidung;
		$this->save();
	}
	public function getttbyid($id) {
		return $this->find($id);
	}
}
