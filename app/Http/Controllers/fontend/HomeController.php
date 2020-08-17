<?php

namespace App\Http\Controllers\fontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\News;

class HomeController extends Controller
{
    public function index()
    {
        $lastDay= date('Y-m-d',mktime(0, 0, 0, date("m"), date("d")-5,date("y")));
        $data['newsNew'] = News::where('status', 1)->orderBy('created_at', 'desc')->get();
        $data['newsTravel'] = News::where('status', 1)->where('categorys_id', 4)->orderBy('created_at', 'desc')->get();
        $data['newsSports'] = News::where('status', 1)->where('categorys_id', 5)->orderBy('created_at', 'desc')->limit(9)->get();
        $data['hotSports'] = News::where('status', 1)->where('categorys_id', 5)->where('created_at','>=',$lastDay)->where('created_at','<=',date('Y-m-d H:i:s'))->orderBy('view','desc')->limit(5)->get();
        // dd($data['hotSports']);
        return view('fontend.page.home', $data);
    }
}
