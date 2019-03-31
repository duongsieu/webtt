<?php

namespace App\Http\Controllers;

use App\chitietsanpham;
use App\images;
use App\sanpham;

class chitietsanphamController extends Controller {
	//

	public function getDanhsach($id) {
		// $sanpham	= sanpham::find($id);
		$chitietsanpham = chitietsanpham::where('id_sanpham', $id)->get();
		return view('admin.chitietsanpham.danhsach', ['chitietsanpham' => $chitietsanpham]);
	}
	public function getchitiet($id) {
		$chitietsanpham = chitietsanpham::where('id_sanpham', $id)->get();
		$sanpham = sanpham::find($id);
		$image = images::all();
		$sanphamcungloai = sanpham::where('id_type', $sanpham->id_type)->get();
		//dd($chitietsanpham);
		return view('products_single', ['chitietsanpham' => $chitietsanpham, 'sanpham' => $sanpham, 'sanphamcungloai' => $sanphamcungloai, 'image' => $image]);
	}
}
