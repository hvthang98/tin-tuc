<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ReplyComments extends Model
{
    protected $table = 'reply_comments';

    public function comments(){
    	return $this->belongsTo('App\Models\Comments','comments_id');

    }
    public function users(){
    	return $this->belongsTo('App\Models\Users','users_id');
    }
    
}
