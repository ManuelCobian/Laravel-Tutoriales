<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
    //
    protected $table="tags";
    protected $fillable=['name'];

      public function Articles()
	{
		return $this->belongsToMany('App\Article')->withTimestamps();//sirve para las relacion muchos a muchos
	}
}
