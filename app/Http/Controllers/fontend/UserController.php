<?php

namespace App\Http\Controllers\fontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Users;
use Illuminate\Support\Facades\Auth;
class UserController extends Controller
{
    public function login(){
    	return view('fontend.pages.user.login');
    }
    public function post_login(Request $req){
    	$username = $req->username;
    	$password = $req->password;
    	if(Auth::attempt(['username' => $username, 'password' => $password, 'level' => 1 ])){
    		return redirect('/')->with('notification','Đăng nhập thành công!');
    	}
    	else{
    		return redirect()->back()->with('notification','Đăng nhập thất bại!');
    	}

    }
    public function signup(){
    	return view('fontend.pages.user.signup');
    }
    public function post_signup(Request $req){

    	$username = $req->username;
    	$name = $req->name;
    	$password = $req->password;
    	$birth = $req->birthday;
    	$address = $req->address;

    	$user = new Users;
    	$user->username = $username;
    	$user->name = $name;
    	$user->password = bcrypt($password);
    	$user->birthday = $birth;
    	$user->address = $address;
    	$user->save();
    	return redirect('/')->with('notification','Đã đăng ký tài khoản thành công!');
    }
}
