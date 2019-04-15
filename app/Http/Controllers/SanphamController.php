<?php

namespace App\Http\Controllers;

use App\chitietsanpham;
use App\sanpham;
use App\theloai;
use Illuminate\Http\Request;

class SanphamController extends Controller {
	//

	public function getDanhsach() {
		$sanpham = sanpham::paginate(5);
		return view('admin.sanpham.danhsach', ['sanpham' => $sanpham]);
	}

	public function getthem() {
		$theloai = theloai::all();
		return view('admin.sanpham.them', ['theloai' => $theloai]);
	}

	public function postthem(Request $request) {
		$this->validate($request, //ham kierm tra thu nhap hay chua
			[
				'name' => 'required|unique:sanpham,name|min:3|max:100',
				'TheLoai' => 'required',
				'price' => 'required',
				'amount' => 'required',
				'description' => 'required ',
			],
			[
				'name.required' => 'Bạn chưa nhập tên sản phẩm',
				'name.unique' => 'Tên sản phẩm đã tồn tại',
				'name.min' => 'Tên sản phẩm có độ dài từ 3-100',
				'name.max' => 'Tên sản phẩm có độ dài từ 3-100',
				'TheLoai.required' => 'Bạn chưa chọn thể loại',
				'price.required' => 'Bạn chưa chọn thể loại',
				'amount.required' => 'Bạn chưa chọn thể loại',
				'description' => 'Bạn chưa chọn thể loại',
			]);
		///
		$sanpham = new sanpham;
		$sanpham->add($request);
		///
		$chitietsanpham = new chitietsanpham;
		$chitietsanpham->add($request, $sanpham->id);
		return redirect('admin/sanpham/them')->with('thongbao', 'Thêm thành công');
	}

	public function getSua($id) {
		$sanpham = sanpham::find($id);
		$theloai = theloai::all();
		return view('admin.sanpham.sua', ['sanpham' => $sanpham], ['theloai' => $theloai]);
	}

	public function postSua(Request $request, $id) {

		$this->validate($request, //ham kierm tra thu nhap hay chua
			[
				'name' => 'required|min:3|max:100',
				'TheLoai' => 'required',
				'price' => 'required',
				'amount' => 'required',
				'description' => 'required ',
			],
			[
				'name.required' => 'Bạn chưa nhập tên sản phẩm',
				'name.min' => 'Tên sản phẩm có độ dài từ 3-100',
				'name.max' => 'Tên sản phẩm có độ dài từ 3-100',
				'TheLoai.required' => 'Bạn chưa chọn thể loại',
				'price.required' => 'Bạn chưa chọn thể loại',
				'amount.required' => 'Bạn chưa chọn thể loại',
				'description' => 'Bạn chưa chọn thể loại',
			]);

		$sanpham = sanpham::find($id);
		$sanpham->add($request);
		return redirect('admin/sanpham/sua/' . $id)->with('thongbao', 'Sửa thành công');
	}
	public function getxoa($id) {
		$sanpham = sanpham::find($id);
		$sanpham->delete();
		return redirect('admin/sanpham/danhsach')->with('thongbao', 'Bạn đã xóa thành công');

	}

}