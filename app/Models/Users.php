<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Users extends Model
{
    protected $table = 'users';

    function news(){
    	return $this->hasMany('App\Models\News', 'users_id');
    }
    
}
