<?php

namespace App\Http\Controllers;

use App\dichvu;
use Illuminate\Http\Request;

class dichvuController extends Controller {
	//

	public function getDanhsach() {
		$dichvu = dichvu::all();
		return view('admin.dichvu.danhsach', ['dichvu' => $dichvu]);
	}

	public function getthem() {
		return view('admin.dichvu.them');
	}

	public function postthem(Request $request) {
		$dichvu = new dichvu;
		$dichvu->add($request);
		return redirect('admin/dichvu/them')->with('thongbao', 'Thêm thành công');
	}

	public function getSua($id) {
		$dichvu = dichvu::find($id);
		return view('admin.dichvu.sua', ['dichvu' => $dichvu]);
	}

	public function postSua(Request $request, $id) {
		$dichvu = dichvu::find($id);
		$dichvu->add($request);
		return redirect('admin/dichvu/sua/' . $id)->with('thongbao', 'Sửa thành công');
	}
	public function getxoa($id) {
		$dichvu = dichvu::find($id);
		$dichvu->delete();
		return redirect('admin/dichvu/danhsach')->with('thongbao', 'Bạn đã xóa thành công');
	}

}