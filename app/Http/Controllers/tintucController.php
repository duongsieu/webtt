<?php

namespace App\Http\Controllers;

use App\tintuc;
use Illuminate\Http\Request;

class tintucController extends Controller {
	//

	public function getDanhsach() {
		$tintuc = tintuc::all();
		return view('admin.tintuc.danhsach', ['tintuc' => $tintuc]);
	}

	public function getthem() {
		return view('admin.tintuc.them');
	}

	public function postthem(Request $request) {
		$tintuc = new tintuc;
		$tintuc->tieude = $request->tieude;
		$tintuc->tomtat = $request->tomtat;
		$tintuc->noidung = $request->noidung;
		$tintuc->save();
		return redirect('admin/tintuc/them')->with('thongbao', 'Thêm thành công');
	}

	public function getSua($id) {
		$tintuc = tintuc::find($id);
		return view('admin.tintuc.sua', ['tintuc' => $tintuc]);
	}

	public function postSua(Request $request, $id) {

		$tintuc->tieude = $request->tieude;

		$tintuc->tomtat = $request->tomtat;
		$tintuc->noidung = $request->noidung;

		if ($request->hasFile('img')) {
			$file = $request->file('img');
			$duoi = $file->getClientOriginalExtension();
			if ($duoi != 'jpg' && $duoi != 'png' && $duoi != 'jpeg') {
				return redirect('admin/tintuc/them')->with('Lỗi', 'Chỉ được chọn file có đuôi jpg, png, jpeg');
			}
			$name = $file->getClientOriginalName();
			// $image = time().'_'.$name;
			$file->move('upload', $name);
			$tintuc->img = $name;
		}
		$tintuc->save();
		return redirect('admin/tintuc/sua/' . $id)->with('thongbao', 'Sửa thành công');
	}
	public function getxoa($id) {
		$tintuc = tintuc::find($id);
		$tintuc->delete();
		return redirect('admin/tintuc/danhsach')->with('thongbao', 'Bạn đã xóa thành công');
	}
	public function gettintuc($id) {
		$tintuc = tintuc::find($id);
		return view('blog_single', ['tintuc' => $tintuc]);
	}
}
