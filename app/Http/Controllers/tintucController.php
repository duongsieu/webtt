<?php

namespace App\Http\Controllers;

use App\tintuc;
use Illuminate\Http\Request;

class tintucController extends Controller {

	//lấy danh sách tất cả tin tức
	public function getDanhsach() {
		$tintuc = tintuc::all();
		return view('admin.tintuc.danhsach', ['tintuc' => $tintuc]);
	}
	//trả về giao diện trang thêm tin tức
	public function getthem() {
		return view('admin.tintuc.them');
	}
	//thêm tin tức khi nhận đc dữ liệu từ người dùng
	public function postthem(Request $request) {
		$tintuc = new tintuc;
		$tintuc->add($request);
		return redirect('admin/tintuc/them')->with('thongbao', 'Thêm thành công');
	}
	//hiển thị giao diện sửa với thông tin người dùng muốn sửa
	public function getSua($id) {
		$tintuc = tintuc::find($id);
		return view('admin.tintuc.sua', ['tintuc' => $tintuc]);
	}
	//Thực hiện chức năng sửa khi nhận đc dữ liệu
	public function postSua(Request $request, $id) {
		$tintuc = new tintuc;
		$tt = $tintuc->getttbyid($id);
		$tt->add($request);
		return redirect('admin/tintuc/sua/' . $id)->with('thongbao', 'Sửa thành công');
	}
	//thực hiện chức năng xóa tin tức
	public function getxoa($id) {
		$tintuc = tintuc::find($id);
		$tintuc->delete();
		return redirect('admin/tintuc/danhsach')->with('thongbao', 'Bạn đã xóa thành công');
	}
	//lấy tin tức theo id
	public function gettintuc($id) {
		$tintuc = tintuc::find($id);
		return view('blog_single', ['tintuc' => $tintuc]);
	}
}
