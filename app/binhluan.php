<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class binhluan extends Model {
	//
	protected $table = "binhluan";
	public function user() {
		return $this->belongsTo('App\user', 'id_user', 'id');
	}
	public function sanpham() {
		return $this->belongsTo('App\sanpham', 'id_sanpham', 'id');
	}
	//them binh luan
	public function add(Request $request, $id) {
		$idsp = $id;
		$this->id_user = Auth::user()->id;
		$this->id_sanpham = $idsp;
		$this->noidung = $request->noidung;
		$this->save();

	}
}
