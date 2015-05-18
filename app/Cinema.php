<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Cinema extends Model {

	public function movie()
	{
		$this->hasMany('App\Movie');
	}

	public function session()
	{
		$this->hasMany('App\Session');
	}

}
