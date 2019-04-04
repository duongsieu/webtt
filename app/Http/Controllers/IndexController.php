<?php

namespace App\Http\Controllers;

use App\cart;
use App\chitiethoadon;
use App\dichvu;
use App\hoadon;
use App\images;
use App\sanpham;
use App\theloai;
use App\tintuc;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Input;
use Mail;
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
		$sanpham = sanpham::where('noibat', 1)->orderBy('id')->take(4)->get();
		$sanpham2 = sanpham::where('noibat', 1)->orderBy('id', 'desc')->take(4)->get();
		$dichvu = dichvu::all();
		$tintuc = tintuc::orderBy('id', 'desc')->take(2)->get();
		$images = images::all();

		return view('index', ['sanpham' => $sanpham, 'dichvu' => $dichvu, 'tintuc' => $tintuc, 'images' => $images, 'sanpham2' => $sanpham2]);
	}
	public function getdathang() {
		if (Session::has('cart')) {

			$oldcart = Session::has('cart') ? Session::get('cart') : null;
			$cart = new cart($oldcart);
			$cart = Session::get('cart');
			$images = images::all();
			$sanpham_cart = $cart->items;
			$totalQty = $cart->totalQty;
			$totalPrice = $cart->totalPrice;

			return view('dathang', ['sanpham_cart' => $sanpham_cart, 'totalQty' => $totalQty, 'totalPrice' => $totalPrice, 'images' => $images]);
		}
	}
	public function postdathang(Request $request) {
		$cart = Session::get('cart');
		$bill = new hoadon;
		$bill->id_user = Auth::user()->id;
		$bill->ngay = date('Y-m-d');
		$bill->tonghoadon = $cart->totalPrice;
		$bill->note = $request->note;
		$bill->status = 'Chưa giao hàng';
		$bill->save();

		foreach ($cart->items as $key => $value) {
			# code...
			$bill_detail = new chitiethoadon;
			$bill_detail->id_bill = $bill->id;
			$bill_detail->unit_price = ($value['price'] / $value['qty']);
			$bill_detail->soluong = $value['qty'];
			$bill_detail->id_product = $key;
			$bill_detail->save();
		}
		$sanpham_cart = $cart->items;
		// $tensp = $sanpham_cart['name'];

		$data = ['hoten' => $request->name,
			'diachi' => $request->diachi,
			'sp' => $sanpham_cart,
			'tonghoadon' => $cart->totalPrice,
		];

		Mail::send('mail', $data, function ($msg) {

			$msg->from('shopmoto224@gmail.com', 'ShopMoto');
			$msg->to(Input::get('email'), 'Dương Siêu')->subject('ShopMoto đã nhận đơn hàng');
		});
		Session::forget('cart');
		return view('chucmung');

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
		$sanpham = sanpham::where('id_type', 1)->orderBy('id', 'desc')->simplePaginate(8);
		$images = images::all();
		$theloai = theloai::all();
		return view('shop', ['sanpham' => $sanpham, 'images' => $images, 'theloai' => $theloai]);
	}
	public function getdv() {
		$dichvu = dichvu::all();
		return view('services', ['dichvu' => $dichvu]);
	}
	public function gettt() {
		$tintuc = tintuc::simplePaginate(4);
		$images = images::all();
		return view('blog', ['tintuc' => $tintuc, 'images' => $images]);
	}
	public function caidat(Request $request) {
		$this->validate($request, //ham kierm tra thu nhap hay chua
			[
				'newpassword' => 'required',
				'newpasswordagain' => 'required|same:newpassword',
			],
			[
				'newpassword.required' => 'Bạn phải nhập mật khẩu',
				'newpasswordagain.required' => 'Bạn phải nhập lại mật khẩu',
				'newpasswordagain.same' => 'Mật khẩu nhập lại chưa đúng',

			]);
		$user = User::find(Auth::user()->id);
		$user->name = $request->name;
		$user->email = $request->email;
		$user->sdt = $request->sdt;
		$user->password = bcrypt($request->newpassword);
		$user->role = "khach";
		$user->diachi = $request->diachi;
		$user->save();
		return redirect()->back()->with('thongbao', 'Bạn đã cập nhật mật khẩu thành công');
	}

}