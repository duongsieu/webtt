<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;

class images extends Model {

	protected $table = "images";
	public function sanpham() {
		return $this->belongsTo('App\sanpham', 'id_sanpham', 'id');
	}
	public function tintuc() {
		return $this->belongsTo('App\tintuc', 'id_tintuc', 'id');
	}
	public function add(Request $request) {

		if ($request->hasFile('img')) {
			$file = $request->file('img');
			$duoi = $file->getClientOriginalExtension();
			if ($duoi != 'jpg' && $duoi != 'png' && $duoi != 'jpeg') {
				return redirect('admin/images/them')->with('Lỗi', 'Chỉ được chọn file có đuôi jpg, png, jpeg');
			}
			$name = $file->getClientOriginalName();
			// $image = time().'_'.$name;
			$file->move('upload', $name);
			$this->img = $name;
		}
		$this->id_sanpham = $request->id_sanpham;
		$this->id_dichvu = $request->id_dichvu;
		$this->id_tintuc = $request->id_tintuc;
		$this->chude = $request->chude;
		$this->save();

	}
	public function xoa($id) {
		$xoaanh = $this->find($id);
		$xoaanh->delete();
	}
	public function index22() {

		return $this->paginate(5);
	}
	public function getimgbyid($id) {
		return $this->find($id);
	}
}
