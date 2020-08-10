<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Users;
use Illuminate\Support\Facades\Auth;
class UserController extends Controller
{
    public function login(){

    	return view('backend.login');
    }

    public function post_login(Request $req){
    	$username = $req->email;
    	$password = $req->password;
    	$data = ['username'=>$username,'password'=>$password,'level'=>1];
    	if(Auth::attempt($data)){
    		return view('backend.master.master');
    	}
    	else{
    		return view('backend.login')->with('notification','Thông tin đăng nhập sai');
    	}
    }
    
    public function logout(){
    	Auth::logout();
    	return view('backend.login');
    }
}
