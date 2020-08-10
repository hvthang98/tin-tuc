<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Categorys extends Model
{
    protected $table = 'categorys';

    public function type_news(){
    	return $this->hasMany('App\Models\Typenews', 'categorys_id');
    }

    public function news(){
    	return $this->hasMany('App\Models\News', 'categorys_id');
    }
}
