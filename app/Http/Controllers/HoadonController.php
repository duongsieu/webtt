<?php

namespace App\Http\Controllers;
use App\chitiethoadon;
use App\hoadon;

class HoadonController extends Controller {
	//index,show,storage,update,destroy

	public function getDanhsach() {
		$hoadon = hoadon::all();
		return view('admin.hoadon.danhsach', ['hoadon' => $hoadon]);
	}

	public function getDanhsachchitiet($id) {
		$danhsachchitiet = chitiethoadon::where('id_bill', $id)->get();
		// dd($danhsachchitiet);
		return view('admin.chitiethoadon.danhsach', ['danhsachchitiet' => $danhsachchitiet]);

	}
}