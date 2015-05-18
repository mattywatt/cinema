<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Movie extends Model {

	public function sessions()
	{
		$this->hasMany('App\Session');
	}

	public function cinemas()
	{
		$this->hasMany('App\Cinema');
	}

}
