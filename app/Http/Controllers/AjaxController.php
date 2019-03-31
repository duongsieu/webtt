<?php

namespace App\Http\Controllers;

use App\images;
use App\sanpham;

class AjaxController extends Controller {

	public function getsanpham($idtheloai) {
		$sanpham = sanpham::where('id_type', $idtheloai)->get();
		$images = images::all();
		foreach ($sanpham as $sp) {
			echo " <div class='col-sm-6 col-md-3 col'>
              <div class='thumbnail' id='sanpham'>
                <figure class='image one'>
                @foreach($images as $img)
                  @if($img->id_sanpham == $sp->id && $img->chude == 1 )
                  <a href='product_single/'" . $sp->id . "''><img src='upload/" . $img->img . "'' class='img-responsive' alt='Responsive image'></a>
                    @endif
                  @endforeach
                </figure>
                <div class='caption'>
                  <h3><a href='product_single/" . $sp->id . "''>" . $sp->name . "</a></h3>
                  {{-- <p>{!!$sp->description!!}</p> --}}
                  <div class='box'>
                    <p><span>'number_format(.$sp->price.)'</span>&#8363;</p>
                    <span class='cart'><i class='fa fa-shopping-cart' aria-hidden='true'></i></span>
                  </div>
                </div>
              </div>
            </div>
            ";
		}

	}
}