<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Typenews extends Model
{
    protected $table = 'type_news';

    public function categorys(){
    	
    	return $this->belongsTo('App\Models\Categorys', 'categorys_id');
    }
}
