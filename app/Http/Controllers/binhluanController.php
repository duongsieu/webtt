<?php

namespace App\Http\Controllers;

use App\binhluan;
use Illuminate\Http\Request;

class binhluanController extends Controller {

	public function postbinhluan(Request $request, $id) {

		$binhluan = new binhluan;
		$binhluan->add($request, $id);
		return redirect()->back();

	}

}