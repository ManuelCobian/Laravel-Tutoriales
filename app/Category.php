<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    //
    protected $table="categories";
    protected $fillable=['name'];

   public function articles(){
		//soy una relacion uno a muchos

		return $this->hasMany('App\Article');
	}
}
