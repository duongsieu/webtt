<?php

namespace App\Http\Controllers;

use App\images;
use App\sanpham;

class AjaxController extends Controller {

	public function getsanpham($idtheloai) {
		$sanpham = sanpham::where('id_type', $idtheloai)->simplePaginate(8);
		$images = images::all();
		return view('spfltl', ['sanpham' => $sanpham, 'images' => $images]);

	}
}