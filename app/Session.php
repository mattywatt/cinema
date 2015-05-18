<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Session extends Model {

	public function movie()
	{
		return $this->belongsTo('App\Movie');
	}

	public function cinema()
	{
		return $this->belongsTo('App\Cinema');
	}

}
