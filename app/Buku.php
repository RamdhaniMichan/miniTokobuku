<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Buku extends Model
{
   	protected $table = 'buku';
   	protected $dates = ['tgl_terbit'];

   	public function category(){
   		return $this->belongsTo('App\Category');
	}
	   
	
}
