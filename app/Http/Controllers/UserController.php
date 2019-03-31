<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Session;

class UserController extends Controller {

	//

	public function getDanhsach() {
		$user = User::all();
		return view('admin.user.danhsach', ['user' => $user]);
	}

	public function getthem() {
		return view('admin.user.them');
	}

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
		$user->name = $request->name;
		$user->email = $request->email;
		$user->sdt = $request->sdt;
		$user->password = bcrypt($request->password);
		$user->role = $request->role;
		$user->diachi = $request->diachi;
		$user->save();
		return redirect('admin/user/them')->with('thongbao', 'Thêm thành công');
	}

	public function getSua($id) {
		$user = User::find($id);
		return view('admin.user.sua', ['user' => $user]);
	}

	public function postSua(Request $request, $id) {
		$user = User::find($id);
		$user->name = $request->name;
		$user->email = $request->email;
		$user->sdt = $request->sdt;
		$user->password = bcrypt($request->password);
		$user->role = $request->role;
		$user->diachi = $request->diachi;
		$user->save();
		return redirect('admin/user/sua/' . $id)->with('thongbao', 'Sửa thành công');
	}
	public function getxoa($id) {
		$user = User::find($id);
		$user->delete();
		return redirect('admin/user/danhsach')->with('thongbao', 'Xóa thành công');
	}
	public function getdangnhapAdmin() {
		return view('login');
	}
	public function postdangnhapAdmin(Request $request) {
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
			return redirect('admin/user/danhsach');
		} elseif (Auth::attempt(['email' => $email, 'password' => $password, 'role' => "khach"])) {
			return redirect('index');
		} else {
			return redirect('dangnhap')->with('thongbao', 'Đăng nhập không thành công');
		}
	}
	public function getdangxuat() {
		Auth::logout();
		Session::forget('cart');
		return redirect('index');
	}
	public function getdangky() {
		return view('dangky');
	}
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
		$user->name = $request->name;
		$user->email = $request->email;
		$user->sdt = $request->sdt;
		$user->password = bcrypt($request->password);
		$user->role = "khach";
		$user->save();
		return redirect('dangky')->with('thongbao', 'Chúc mừng bạn đã đăng ký thành công');
	}

}