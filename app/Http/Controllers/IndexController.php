<?php

namespace App\Http\Controllers;

use App\cart;
use App\dichvu;
use App\sanpham;
use App\tintuc;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Session;

class IndexController extends Controller {

	// public function __construct() {
	// 	parent::__construct();
	// 	if (Auth::check()) {
	// 		GLOBAL $nguoidung;
	// 		$nguoidung = Auth::user();
	// 		view()->share('nguoidung', $nguoidung);
	// 	};

	// }

	public function getsanphamnoibat() {
		$sanpham = sanpham::where('noibat', 1)->get();
		$dichvu = dichvu::all();
		$tintuc = tintuc::orderBy('id', 'desc')->take(2)->get();

		return view('index', ['sanpham' => $sanpham, 'dichvu' => $dichvu, 'tintuc' => $tintuc]);
	}
	public function getdathang() {

		$oldcart = Session::has('cart') ? Session::get('cart') : null;
		$cart = new cart($oldcart);
		$cart = Session::get('cart');

		$sanpham_cart = $cart->items;
		$totalQty = $cart->totalQty;
		$totalPrice = $cart->totalPrice;

		return view('dathang', ['sanpham_cart' => $sanpham_cart, 'totalQty' => $totalQty, 'totalPrice' => $totalPrice]);

	}
	public function getAddtocart(Request $request, $id) {
		if (Auth::check()) {
			$sanpham = sanpham::find($id);
			$oldcart = Session::has('cart') ? Session::get('cart') : null;
			$cart = new cart($oldcart);
			$cart->add($sanpham, $id);

			$request->Session()->put('cart', $cart);
			return redirect()->back();
		} else {
			return redirect('dangnhap')->with('Thongbao2', 'Bạn phải đăng nhập để mua hàng');
		}
	}
	public function getDelcart($id) {

		$oldcart = Session::has('cart') ? Session::get('cart') : null;
		$cart = new cart($oldcart);
		$cart->removeItem($id);
		if (count($cart->items) > 0) {

			Session::put('cart', $cart);
		} else {
			Session::forget('cart');
		}

		return redirect()->back();

	}
	public function getshop() {
		$sanpham = sanpham::where('noibat', 1)->get();
		$sanphama = sanpham::orderBy('id', 'desc')->get();
		return view('shop', ['sanpham' => $sanpham, 'sanphama' => $sanphama]);
	}
	public function getdv() {
		$dichvu = dichvu::all();
		return view('services', ['dichvu' => $dichvu]);
	}
	public function gettt() {
		$tintuc = tintuc::all();
		return view('blog', ['tintuc' => $tintuc]);
	}

}