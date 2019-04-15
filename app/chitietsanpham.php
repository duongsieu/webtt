<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;

class chitietsanpham extends Model {
	//
	protected $table = "chitietsanpham";
	public function sanpham() {
		return $this->belongsTo('App\sanpham', 'id_sanpham', 'id');
	}
	public function add(Request $request, $id) {
		$this->khoiluong = $request->khoiluong;
		$this->kichthuoc = $request->kichthuoc;
		$this->trucbanhxe = $request->trucbanhxe;
		$this->docaiyen = $request->docaiyen;
		$this->sanggamxe = $request->sanggamxe;
		$this->binhxang = $request->binhxang;
		$this->lopxe = $request->lopxe;
		$this->congsuattoida = $request->congsuattoida;
		$this->id_sanpham = $id;
		$this->save();
	}

}
