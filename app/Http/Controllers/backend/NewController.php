<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\News;
use App\Models\Categorys;
use App\Models\Users;
use App\Models\Typenews;
use Illuminate\Support\Facades\Auth;
class NewController extends Controller
{
    public function addnew(){
    	$categories = Categorys::all();
    	$typenews = Typenews::all();
    	
    	return view('backend.new.add-new')->with('categories',$categories)->with('typenews',$typenews);
    }

    public function post_addnew(Request $req){

    	$title = $req->title;
    	$categorys_id = $req->categorys;
    	$type_news = $req->type_news;
    	$users_id = Auth::user()->id;
    	$content = $req->content;
    	$summary = $req->summary;
    	$ordernum = $req->ordernum;
    	$status = $req->status;

    	$img = $req->avatar;
    	$filename = $img->getClientOriginalName();
    	$img->move('public/images/',$filename);
    	$avatar = $filename;

    	$news = new News;
    	$news->categorys_id = $categorys_id;
    	$news->type_news_id = $type_news;
    	$news->users_id = $users_id;
    	$news->title = $title;
    	$news->avatar = $avatar;
    	$news->summary = $summary;
    	$news->content = $content;
    	$news->status = $status;
    	$news->ordernum = $ordernum;
    	$news->save();
    	return redirect()->route('indexAdmin')->with('notification','Thêm thành công');

    }
}
