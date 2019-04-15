<?php

namespace App\Http\Controllers;

use App\theloai;
use Illuminate\Http\Request;

class TheloaiController extends Controller {

	//thực hiện lấy danh sách tất cả thể loại
	public function getDanhsach() {
		$theloai = theloai::all();
		return view('admin.theloai.danhsach', ['theloai' => $theloai]);
	}
	//hiển thị giao diện thêm thể loại
	public function getthem() {
		return view('admin.theloai.them');
	}
	//
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
		$theloai = new theloai;
		$theloai->add($request);
		return redirect('admin/theloai/them')->with('thongbao', 'Thêm thành công');
	}

	public function getSua($id) {
		$theloai = theloai::find($id);
		return view('admin.theloai.sua', ['theloai' => $theloai]);
	}

	public function postSua(Request $request, $id) {
		$theloai = theloai::find($id);
		$this->validate($request,
			[
				'name' => 'required|unique:theloai,name|min:3|max:100',
			],
			[
				'name.required' => 'Bạn chưa nhập tên thể loại',
				'name.unique' => 'Tên thể loại đã tồn tại',
				'name.min' => 'Tên thể loại có độ dài từ 3-100',
				'name.max' => 'Tên thể loại có độ dài từ 3-100',

			]);
		$theloai->add($request);
		return redirect('admin/theloai/sua/' . $id)->with('thongbao', 'Sửa thành công');
	}
	public function getxoa($id) {
		$theloai = theloai::find($id);
		$theloai->delete();
		return redirect('admin/theloai/danhsach')->with('thongbao', 'Bạn đã xóa thành công');

	}

}