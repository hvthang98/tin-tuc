<?php

namespace App\Http\Controllers\ajax;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\News;
use App\Models\DetailLike;
use Illuminate\Support\Facades\Auth;
class LikeController extends Controller
{
    function like($id){
    	$user_id = Auth::user()->id;
    	$detail = DetailLike::where('users_id',$user_id)->where('news_id',$id)->get()->count();
    	if($detail == 0){
    		$new = News::where('id',$id)->increment('like');
    		$detaillike = new DetailLike;
    		$detaillike->users_id = $user_id;
    		$detaillike->news_id = $id;
    		$detaillike->save();
    	}
    	
    	    	$ne = News::where('id',$id)->select('like')->first();
    	echo $ne->like;
    	

    }
}
