<?php

namespace App\Http\Controllers;

use App\dichvu;
use App\lienhe;
use App\sanpham;
use App\tintuc;
use Illuminate\Http\Request;

class LienheController extends Controller {
	public function getthem() {
		$sanpham = sanpham::where('noibat', 1)->get();
		$dichvu = dichvu::all();
		$tintuc = tintuc::orderBy('id', 'desc')->take(4)->get();

		return view('index', ['sanpham' => $sanpham, 'dichvu' => $dichvu, 'tintuc' => $tintuc]);
	}

	public function postthem(Request $request) {
		$lienhe = new lienhe;
		$lienhe->ten = $request->ten;
		$lienhe->sdt = $request->sdt;
		$lienhe->noidung = $request->noidung;
		$lienhe->save();

		return redirect('lienhe/them')->with('thongbao', 'Cảm ơn bạn đã gửi phản hồi!!!');
	}
	public function getdanhsach() {
		$lienhe = lienhe::all();
		return view('admin.lienhe.danhsach', ['lienhe' => $lienhe]);
	}
}