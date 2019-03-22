<?php

namespace App\Http\Controllers;

use App\binhluan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class binhluanController extends Controller {

	public function postbinhluan(Request $request, $id) {
		$idsp = $id;
		// $ctsp = chitietsanpham::where('id_sanpham', $id)->get();
		$binhluan = new binhluan;
		$binhluan->id_user = Auth::user()->id;
		$binhluan->id_sanpham = $idsp;
		$binhluan->noidung = $request->noidung;
		$binhluan->save();

		return redirect("product_single/{$id}");

	}

}