<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Tags extends Model
{
    protected $table = 'tags';
    protected $guarded = [];

    function news(){
    	return $this->belongstoMany('App\Models\News','new_tags','tags_id','news_id');
    }
}
