<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Bulletin extends Model
{
	protected $guarded = array('id');
	public $timestamps = false;
	
	public static $rules = array(
	  'name' => 'required',
	  'comment' => 'required'
	);
}
