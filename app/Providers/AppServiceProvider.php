<?php

namespace App\Providers;

use App\dichvu;
use App\sanpham;
use App\tintuc;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider {
	/**
	 * Register any application services.
	 *
	 * @return void
	 */
	public function register() {
		//

	}

	/**
	 * Bootstrap any application services.
	 *
	 * @return void
	 */
	public function boot() {
		//
		view()->composer('services', function ($view) {
			$dichvu = dichvu::all();
			$view->with('dichvu', $dichvu);
		});
		view()->composer('blog', function ($view) {
			$tintuc = tintuc::all();
			$view->with('tintuc', $tintuc);
		});
		view()->composer('shop', function ($view) {
			$sanpham = sanpham::where('noibat', 1)->get();
			$view->with('sanpham', $sanpham);
		});
		view()->composer('shop', function ($view) {
			$sanphama = sanpham::orderBy('id', 'desc')->get();
			$view->with('sanphama', $sanphama);
		});
	}

}
