<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class NewTags extends Model
{
    protected $table = 'new_tags';
    protected $guarded = [];
    function tags(){
    	return $this->belongsTo('App\Models\Tags','tags_id');
    } 
    function news(){
    	return $this->belongsTo('App\Models\News','news_id');
    } 
}
