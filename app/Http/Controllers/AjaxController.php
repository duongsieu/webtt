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
	public function gettimkiem($key) {
		$sanpham = sanpham::where('name', 'like', '%' . $key . '%')
			->orwhere('price', $key)->get();
		$images = images::all();
		// dd($sanpham);
		return view('timkiem', ['sanpham' => $sanpham, 'images' => $images]);
	}
}