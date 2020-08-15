<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Comments extends Model
{
    protected $table = 'comments';

     public function users(){

    	return $this->belongsTo('App\User','users_id');

    }
    
    public function news(){

    	return $this->belongsTo('App\Models\News', 'categorys_id');
    }
}
