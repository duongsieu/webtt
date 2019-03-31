<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class tintuc extends Model {
	//
	protected $table = "tintuc";
	public function images() {
		return $this->belongsTo('App\images', 'id_tintuc', 'id');
	}
}
