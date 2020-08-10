<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class News extends Model
{
    protected $table = 'news';
    
    public function categorys(){

    	return $this->belongsTo('App\Models\Categorys','categorys_id');
    }

    public function type_news(){
    	return $this->belongsTo('App\Models\Typenews', 'type_news_id');
    }

    public function users(){

    	return $this->belongsTo('App\User','users_id');

    }
}
