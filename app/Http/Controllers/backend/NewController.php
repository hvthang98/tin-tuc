<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\NewsRequest;
use App\Models\News;
use App\Models\Categorys;
use App\Models\Users;
use App\Models\Typenews;
use Illuminate\Support\Facades\Auth;
class NewController extends Controller
{

	public function all_news(){

		$news = News::join('users','news.users_id','=','users.id')->join('type_news','news.type_news_id','=','type_news.id')->select('news.*','users.name','type_news.type_name')->paginate(5);
		
		
		return view('backend.new.all-news')->with('news',$news);
	}

    public function addnew(){
    	$categories = Categorys::all();
    	$typenews = Typenews::all();
    	
    	return view('backend.new.add-new')->with('categories',$categories)->with('typenews',$typenews);
    }

    public function post_addnew(NewsRequest $req){

    	$title = $req->title;
    	$categorys_id = $req->categorys;
    	$type_news = $req->type_news;
    	$users_id = Auth::user()->id;
    	$content = $req->content;
    	$summary = $req->summary;
    	$ordernum = $req->ordernum;
    	$status = $req->status;

    	if($req->has('avatar'))
    	{

	    	$img = $req->avatar;
	    	$filename = $img->getClientOriginalName();
	    	$extension = $img->getClientOriginalExtension();
	    	if($extension != 'jpg' && $extension != 'png' && $extension != 'gif'){
	    		return redirect()->back()->with('error','File bạn chọn không hợp lệ');
	    	}
	    	
	    	$img->move('public/images/',$filename);
	    	$avatar = $filename;
    	}
    	else{
    		$avatar = '';
    	}
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
    	return redirect()->route('all-news')->with('notification','Thêm thành công');

    }

    public function edit_new($id){
    	$categories = Categorys::all();
    	$typenews = Typenews::all();
    	$new = News::where('id','=',$id)->first();

    	return view('backend.new.edit-new')->with('news',$new)->with('categories',$categories)->with('typenews',$typenews);
    }
    public function post_edit_new(Request $req , $id){
    	
    	$title = $req->title;
    	$categorys_id = $req->categorys;
    	$type_news = $req->type_news;
    	$users_id = Auth::user()->id;
    	$content = $req->content;
    	$summary = $req->summary;
    	$ordernum = $req->ordernum;
    	$status = $req->status;

    	if($req->has('avatar'))
    	{

	    	$img = $req->avatar;
	    	$filename = $img->getClientOriginalName();
	    	$extension = $img->getClientOriginalExtension();
	    	if($extension != 'jpg' && $extension != 'png' && $extension != 'gif'){
	    		return redirect()->back()->with('error','File bạn chọn không hợp lệ');
	    	}
	    	
	    	$img->move('public/images/',$filename);
	    	$avatar = $filename;
    	}

    	$news = News::where('id','=',$id)->first();
    	$news->categorys_id = $categorys_id;
    	$news->type_news_id = $type_news;
    	$news->users_id = $users_id;
    	$news->title = $title;
    	if(isset($avatar)){
    	$news->avatar = $avatar;
    	}
    	$news->summary = $summary;
    	$news->content = $content;
    	$news->status = $status;
    	$news->ordernum = $ordernum;
    	$news->save();
    	return redirect()->route('all-news')->with('notification','Cập nhật tin tức thành công');
    	
    }
    public function delete_new($id){
    	News::find($id)->delete();
    	return redirect()->route('all-news')->with('notification','Đã xóa thành công');

    }
}
