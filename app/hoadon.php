<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class hoadon extends Model {
	//
	protected $table = "hoadon";
	public function chitiethoadon() {
		return $this->hasMany('App\chitiethoadon', 'id_bill', 'id');
	}
	public function user() {
		return $this->belongsTo('App\User', 'id_user', 'id');
	}
	public function add(Request $request, $cart) {
		$this->id_user = Auth::user()->id;
		$this->ngay = date('Y-m-d');
		$this->tonghoadon = $cart->totalPrice;
		$this->note = $request->note;
		$this->status = 'Chưa giao hàng';
		$this->save();
	}
}
