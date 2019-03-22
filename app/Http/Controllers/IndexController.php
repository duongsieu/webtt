<?php

namespace App\Http\Controllers;

use App\dichvu;
use App\sanpham;
use App\tintuc;

class IndexController extends Controller {
	// function __construct() {
	// 	if (Auth::check()) {
	// 		view()->share('nguoidung', Auth::user());
	// 	}
	// }
	public function getsanphamnoibat() {
		$sanpham = sanpham::where('noibat', 1)->get();
		$dichvu = dichvu::all();
		$tintuc = tintuc::orderBy('id', 'desc')->take(2)->get();

		return view('index', ['sanpham' => $sanpham, 'dichvu' => $dichvu, 'tintuc' => $tintuc]);
	}

}