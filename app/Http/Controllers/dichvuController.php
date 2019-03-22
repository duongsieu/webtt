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
		$dichvu->tendv = $request->tendv;
		$dichvu->tomtat = $request->tomtat;
		$dichvu->noidung = $request->noidung;

		if ($request->hasFile('img')) {
			$file = $request->file('img');
			$duoi = $file->getClientOriginalExtension();
			if ($duoi != 'jpg' && $duoi != 'png' && $duoi != 'jpeg') {
				return redirect('admin/dichvu/them')->with('Lỗi', 'Chỉ được chọn file có đuôi jpg, png, jpeg');
			}
			$name = $file->getClientOriginalName();
			// $image = time().'_'.$name;
			$file->move('upload', $name);
			$dichvu->img = $name;
		}
		$dichvu->save();
		return redirect('admin/dichvu/them')->with('thongbao', 'Thêm thành công');
	}

	public function getSua($id) {
		$dichvu = dichvu::find($id);
		return view('admin.dichvu.sua', ['dichvu' => $dichvu]);
	}

	public function postSua(Request $request, $id) {
		$dichvu = dichvu::find($id);
		$dichvu->tendv = $request->tendv;
		$dichvu->tomtat = $request->tomtat;
		$dichvu->noidung = $request->noidung;

		if ($request->hasFile('img')) {
			$file = $request->file('img');
			$duoi = $file->getClientOriginalExtension();
			if ($duoi != 'jpg' && $duoi != 'png' && $duoi != 'jpeg') {
				return redirect('admin/dichvu/sua')->with('Lỗi', 'Chỉ được chọn file có đuôi jpg, png, jpeg');
			}
			$name = $file->getClientOriginalName();
			// $image = time().'_'.$name;
			$file->move('upload', $name);
			$dichvu->img = $name;
		}
		$dichvu->save();
		return redirect('admin/dichvu/sua/' . $id)->with('thongbao', 'Sửa thành công');
	}
	public function getxoa($id) {
		$dichvu = dichvu::find($id);
		$dichvu->delete();
		return redirect('admin/dichvu/danhsach')->with('thongbao', 'Bạn đã xóa thành công');
	}

}