<?php

namespace App\Http\Controllers;

use App\images;
use App\sanpham;

class AjaxController extends Controller {

	public function getsanpham($idtheloai) {
		$sanpham = sanpham::where('id_type', $idtheloai)->get();
		$images = images::all();
		return view('spfltl', ['sanpham' => $sanpham, 'images' => $images]);

	}
}