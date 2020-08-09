<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\CreateUserRequest;
use App\User;
class UserController extends Controller
{
    public function getCreate()
    {
        return view('backend.page.user.layout_create_user');
    }
    public function postCreate(CreateUserRequest $req)
    {
        $table=new User();
        $table->username =  $req ->username;
        $table->password = bcrypt($req->password);
        $table->name =$req ->name;
        $table->phone_number = $req->phoneNumber;
        $table->address=$req->address;
        $table->birthday=$req->birthday;
        $table->gender= $req->gender;
        $table->level=$req->level;
        $table->save();
        return redirect()->route('getCreateUser')->with('notification','Đăng ký tài khoản thành công');
    }
}
