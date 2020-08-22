<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Users extends Model
{
    protected $table = 'users';

    function news(){
    	return $this->hasMany('App\Models\News', 'users_id');
    }
    function reply_comments(){
    	return $this->hasMany('App\Models\ReplyComments','users_id');
    }
    
}
