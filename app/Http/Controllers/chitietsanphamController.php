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
		$sanphamcungloai = sanpham::where('id_type', $sanpham->id_type)->take(4)->get();
		//dd($chitietsanpham);
		if ($sanpham->id_type == 1 || $sanpham->id_type == 2) {

			return view('products_single', ['chitietsanpham' => $chitietsanpham, 'sanpham' => $sanpham, 'sanphamcungloai' => $sanphamcungloai, 'image' => $image]);
		} elseif ($sanpham->id_type == 3 || $sanpham->id_type == 4) {
			return view('products_single2', ['chitietsanpham' => $chitietsanpham, 'sanpham' => $sanpham, 'sanphamcungloai' => $sanphamcungloai, 'image' => $image]);
		}
	}
}
