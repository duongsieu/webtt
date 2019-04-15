<?php

namespace App;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Http\Request;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable {
	use Notifiable;

	/**
	 * The attributes that are mass assignable.
	 *
	 * @var array
	 */
	protected $fillable = [
		'name', 'email', 'sdt', 'password', 'role', 'diachi',
	];

	/**
	 * The attributes that should be hidden for arrays.
	 *
	 * @var array
	 */
	protected $hidden = [
		'password', 'remember_token',
	];

	/**
	 * The attributes that should be cast to native types.
	 *
	 * @var array
	 */
	protected $casts = [
		'email_verified_at' => 'datetime',
	];
	// protected $table = "users";
	public function hoadon() {
		return $this->hasMany('App\hoadon', 'id_user', 'id');
	}
	public function binhluan() {
		return $this->hasMany('App\binhluan', 'id_user', 'id');
	}
	public function add(Request $request) {
		$this->name = $request->name;
		$this->email = $request->email;
		$this->sdt = $request->sdt;
		$this->password = bcrypt($request->password);
		$this->role = $request->role;
		$this->diachi = $request->diachi;
		$this->save();
	}
	public function getuserbyid($id) {
		return $this->find($id);
	}

}
