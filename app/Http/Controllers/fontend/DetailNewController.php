<?php

namespace App\Http\Controllers\fontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\News;
use App\Models\Typenews;
use App\Models\Users;
use App\Models\Comments;
use Illuminate\Support\Facades\Auth;
class DetailNewController extends Controller
{
    public function index($id){
    	$new = News::where('id','=',$id)->get();
   
    	foreach ($new as $ne) {
    		$type = $ne->type_news_id;
    	}
    	
    	$othernew = News::where('type_news_id','=',$type)->limit(2)->get();
    	
    		$sessionview = 'new'.$id;

    	 		if(!session()->has($sessionview))
    	 		{

		    	 	News::where('id','=',$id)->increment('view'); 
		    	 	session()->put($sessionview,0);
		    	 	
    	 		}
    	return view('fontend.pages.news.detail-new')->with('new',$new)->with('othernew',$othernew);
    }
}
