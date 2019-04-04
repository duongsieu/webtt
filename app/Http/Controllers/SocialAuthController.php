<?php

namespace App\Http\Controllers;

use App\Services\SocialAccountService;
use Auth;
use Socialite;

class SocialAuthController extends Controller {
	public function redirect($social) {
		return Socialite::driver($social)->redirect();
	}

	public function callback(SocialAccountService $service) {
		$user = $service->createOrGetUser(Socialite::driver('facebook')->user());
		auth()->login($user);
		return redirect()->to('/home');
	}
}
