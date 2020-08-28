<?php

namespace App\Http\Controllers\ajax;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Comments;
use App\Models\Users;
use Illuminate\Support\Facades\Auth;
class CommentController extends Controller
{
    public function comment(Request $req , $id){
    	 $users_id = Auth::user()->id;
    	$content = $req->content;
    	$comment = new Comments;
    	$comment->users_id = $users_id;
    	$comment->news_id = $id;
    	$comment->content = $content;
    	$comment->save();
    	if($comment->save()){
    	 
    	 return view('ajax.comment')->with('com',$comment);
    	 
    	}
    	 	
    		
    	
    	
    }
}
