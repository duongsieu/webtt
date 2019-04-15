<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Session;

class UserController extends Controller {

	//
	//lấy tất cả danh sách người dùng
	public function getDanhsach() {
		$user = User::all();
		return view('admin.user.danhsach', ['user' => $user]);
	}
	//Hiển thị trang thêm người dùng
	public function getthem() {
		return view('admin.user.them');
	}
	//Thực hiện chức năng thêm người dùng
	public function postthem(Request $request) {
		$this->validate($request, //ham kierm tra thu nhap hay chua
			[
				'name' => 'required|min:3|max:100',
			],
			[
				'name.required' => 'Bạn phải nhập tên thể loại',
				'name.min' => 'Tên thể loại có độ dài từ 3-100',
				'name.max' => 'Tên thể loại có độ dài từ 3-100',
			]);
		$user = new User;
		$user->add($request);

		return redirect('admin/user/them')->with('thongbao', 'Thêm thành công');
	}
	//hiển thị thông tin người dùng cần sửa
	public function getSua($id) {
		$user1 = new User;
		$user = $user1->getuserbyid($id);
		return view('admin.user.sua', ['user' => $user]);
	}
	//Thực hiện cập nhật thông tin người dùng sau khi sữa
	public function postSua(Request $request, $id) {
		$user = User::find($id);
		$user->add($request);
		return redirect('admin/user/sua/' . $id)->with('thongbao', 'Sửa thành công');
	}
	//xóa một người dùng
	public function getxoa($id) {
		$user = User::find($id);
		$user->delete();
		return redirect('admin/user/danhsach')->with('thongbao', 'Xóa thành công');
	}
	//hiển thị trang đăng nhập, khi đăng nhập rồi thì khôgn đc đăng nhập nữa
	public function getdangnhap() {
		if (Auth::check()) {
			return redirect('/');
		} else {
			return view('login');
		}

	}
	//Thực hiên đăng nhập khi người dùng nhập đúng email và mật khẩu
	public function postdangnhap(Request $request) {
		$this->validate($request,
			[
				'email' => 'required',

				'password' => 'required',
			],
			[
				'email.required' => 'Bạn chưa nhập email',
				'password.required' => 'Bạn chưa nhập password',
			]);
		$email = $request->email;
		$password = $request->password;

		if (Auth::attempt(['email' => $email, 'password' => $password, 'role' => "admin"])) {
			return redirect('admin/index');
		} elseif (Auth::attempt(['email' => $email, 'password' => $password, 'role' => "khach"])) {
			return redirect()->back();
		} else {
			return redirect('dangnhap')->with('thongbao', 'Đăng nhập không thành công');
		}
	}
	//thực hiện chức năng đăng xuất
	public function getdangxuat() {
		Auth::logout();
		Session::forget('cart');
		return redirect('/');
	}
	//hiển thị trang đăng ký
	public function getdangky() {
		return view('dangky');
	}
	//thực hiên thêm người dùng khi người dùng đăng kí tài khảon
	public function postdangky(Request $request) {
		$this->validate($request, //ham kierm tra thu nhap hay chua
			[
				'name' => 'required|min:3|max:100',
				'email' => 'required',
				'sdt' => 'required',
				'password' => 'required',
				'passwordagain' => 'required|same:password',
			],
			[
				'name.required' => 'Bạn phải nhập tên',
				'name.min' => 'Tên thể loại có độ dài từ 3-100',
				'name.max' => 'Tên thể loại có độ dài từ 3-100',
				'email.required' => 'Bạn phải nhập email',
				'sdt.required' => 'Bạn phải nhập số điện thoại',
				'password.required' => 'Bạn phải nhập mật khẩu',
				'passwordagain.required' => 'Bạn phải nhập lại mật khẩu',
				'paswordagain.same' => 'Mật khẩu nhập lại chưa đúng',

			]);
		$user = new User;
		$user->add($request);
		return redirect('dangnhap')->with('thongbao3', 'Chúc mừng bạn đã đăng ký thành công');
	}

}