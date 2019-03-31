<?php

namespace App\Http\Controllers;
use App\images;
use Illuminate\Http\Request;

class imagesController extends Controller {
	/**
	 * Display a listing of the resource.
	 *
	 * @return \Illuminate\Http\Response
	 */
	public function index() {
		$image = new images;
		return view('admin.images.danhsach', ['image' => $image->index22()]);
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return \Illuminate\Http\Response
	 */
	public function create(Request $request) {
		//
		$img = new images;
		$img->add($request);
		return view('admin.images.them')->with('thongbao', 'them thanh cong');

	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @param  \Illuminate\Http\Request  $request
	 * @return \Illuminate\Http\Response
	 */
	public function store(Request $request) {
		//
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return \Illuminate\Http\Response
	 */
	public function show($id) {
		$img = new images;
		$image = $img->getimgbyid($id);
		return view('admin.images.sua', ['image' => $image]);

	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return \Illuminate\Http\Response
	 */
	public function edit($id) {

	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  \Illuminate\Http\Request  $request
	 * @param  int  $id
	 * @return \Illuminate\Http\Response
	 */
	public function update(Request $request, $id) {
		$img = new images;

		$udimg = $img->getimgbyid($id);
		$udimg->add($request);
		return redirect('admin/images/danhsach');
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return \Illuminate\Http\Response
	 */
	public function destroy($id) {
		$img = new images;
		$img->xoa($id);
		return redirect('admin/images/danhsach')->with('thongbaoxoa', 'ban da xoa thanh cong');
	}
}
