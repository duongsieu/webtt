<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
 */

Route::get('/', function () {
	return view('welcome');
});
Route::get('chitiet2', function () {
	return view('products_single2');
});
Route::get('blog', 'IndexController@gettt');

Route::get('careers', function () {
	return view('careers');
});
Route::get('caidat', function () {
	return view('caidat');
});
Route::post('caidat', 'IndexController@caidat');

Route::get('contact', function () {
	return view('blog#contact');
});
Route::group(['prefix' => 'lienhe'], function () {
	Route::get('them', 'LienheController@getthem');
	Route::post('them', 'LienheController@postthem');
});

Route::get('shop', 'IndexController@getshop');
Route::get('dichvu', 'IndexController@getdv');
// Route::get('lienket', function () {
// 	$data = App\sanpham::find(1)->theloai->toArray();
// 	var_dump($data);
// });
Route::get('dangnhap', 'UserController@getdangnhapAdmin');
Route::post('dangnhap', 'UserController@postdangnhapAdmin');

Route::get('dangxuat', 'UserController@getdangxuat');

Route::get('dangky', 'UserController@getdangky');
Route::post('dangky', 'UserController@postdangky');

Route::get('/', 'IndexController@getsanphamnoibat');
Route::get('blog_single/{id}', 'tintucController@gettintuc');

Route::get('product_single/{id}', 'chitietsanphamController@getchitiet');
Route::post('binhluan/{id}', 'binhluanController@postbinhluan');

Route::get('muahang/{id}', 'IndexController@getAddtocart');
Route::get('xoahang/{id}', 'IndexController@getDelcart');
Route::get('dathang', 'IndexController@getdathang');
Route::post('dathang', 'IndexController@postdathang');

Route::group(['prefix' => 'ajax'], function () {
	Route::get('sanpham/{idtheloai}', 'AjaxController@getsanpham');
});

Route::get('/redirect/{social}', 'SocialAuthController@redirect');
Route::get('/callback/{social}', 'SocialAuthController@callback');

Route::group(['prefix' => 'admin'], function () {
	Route::group(['prefix' => 'theloai'], function () {
		//admin/	theloai/....
		Route::get('danhsach', 'TheloaiController@getDanhsach');

		Route::get('sua/{id}', 'TheloaiController@getSua');
		Route::post('sua/{id}', 'TheloaiController@postSua');

		Route::get('them', 'TheloaiController@getthem');
		Route::post('them', 'TheloaiController@postthem');

		Route::get('xoa/{id}', 'TheloaiController@getXoa');
	});
	Route::group(['prefix' => 'sanpham'], function () {
		//admin/sanpham/....
		Route::get('danhsach', 'SanphamController@getDanhsach');

		Route::get('sua/{id}', 'SanphamController@getSua');
		Route::post('sua/{id}', 'SanphamController@postSua');

		Route::get('them', 'SanphamController@getthem');
		Route::post('them', 'SanphamController@postthem');

		Route::get('xoa/{id}', 'SanphamController@getXoa');

	});
	Route::group(['prefix' => 'chitietsanpham'], function () {
		//admin/chitietsanpham/....
		Route::get('danhsach/{id}', 'chitietsanphamController@getDanhsach');

	});
	Route::group(['prefix' => 'chitiethoadon'], function () {
		//admin/chitietsanpham/....
		Route::get('danhsach/{id}', 'HoadonController@getDanhsachchitiet');

	});

	Route::group(['prefix' => 'user'], function () {
		//admin/user/....
		Route::get('danhsach', 'UserController@getDanhsach');

		Route::get('sua/{id}', 'UserController@getSua');
		Route::post('sua/{id}', 'UserController@postSua');

		Route::get('them', 'UserController@getthem');
		Route::post('them', 'UserController@postthem');

		Route::get('xoa/{id}', 'UserController@getXoa');

	});
	Route::group(['prefix' => 'hoadon'], function () {
		//admin/sanpham/....
		Route::get('danhsach', 'HoadonController@getDanhsach');

		Route::get('sua', 'HoadonController@getSua');
		Route::get('them', 'HoadonController@getthem');
	});
	Route::group(['prefix' => 'lienhe'], function () {
		//admin/sanpham/....
		Route::get('danhsach', 'LienheController@getDanhsach');
	});

	Route::group(['prefix' => 'tintuc'], function () {
		Route::get('danhsach', 'tintucController@getDanhsach');
		Route::get('sua/{id}', 'tintucController@getSua');
		Route::post('sua/{id}', 'tintucController@postSua');

		Route::get('them', 'tintucController@getthem');
		Route::post('them', 'tintucController@postthem');

		Route::get('xoa/{id}', 'tintucController@getXoa');
	});
	Route::group(['prefix' => 'dichvu'], function () {
		Route::get('danhsach', 'dichvuController@getDanhsach');
		Route::get('sua/{id}', 'dichvuController@getSua');
		Route::post('sua/{id}', 'dichvuController@postSua');

		Route::get('them', 'dichvuController@getthem');
		Route::post('them', 'dichvuController@postthem');

		Route::get('xoa/{id}', 'dichvuController@getXoa');
	});
	Route::group(['prefix' => 'images'], function () {
		Route::get('danhsach', 'imagesController@index');

		Route::get('sua/{id}', 'imagesController@show');
		Route::post('sua/{id}', 'imagesController@update');

		Route::get('them', function () {
			return view('admin.images.them');
		});
		Route::post('them', 'imagesController@create');

		Route::get('xoa/{id}', 'imagesController@destroy');
	});

});
