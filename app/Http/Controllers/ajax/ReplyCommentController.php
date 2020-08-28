<?php

namespace App\Http\Controllers\ajax;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\ReplyComments;
use Illuminate\Support\Facades\Auth;
class ReplyCommentController extends Controller
{
    public function reply(Request $req, $id){
    	$users_id = Auth::user()->id;
    	

    	$reply = new ReplyComments ;
    	$reply->content = $req->content;
    	$reply->users_id = $users_id;
    	$reply->comments_id = $id;
    	
    	$reply->save();

    	if($reply->save()){
    		
    		
    		return view('ajax.replycomment')->with('reply',$reply);
    	}

    }
}
