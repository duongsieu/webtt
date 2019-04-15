<?php

namespace App\Http\Controllers;

use App\lienhe;
use Illuminate\Http\Request;

class LienheController extends Controller {

	public function postthem(Request $request) {
		$lienhe = new lienhe;
		$lienhe->add($request);

		return redirect('/');
	}
	public function getdanhsach() {
		$lienhe = lienhe::all();
		return view('admin.lienhe.danhsach', ['lienhe' => $lienhe]);
	}
}