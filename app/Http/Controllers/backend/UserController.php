<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Users;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\CreateUserRequest;
use App\Http\Requests\UpdateUserRequest;
use App\User;


class UserController extends Controller
{
    public function login()
    {
        if(Auth::check()){
            return redirect()->route('indexAdmin');
        }
        return view('backend.login');
    }

    public function post_login(Request $req)
    {
        $username = $req->email;
        $password = $req->password;
        $data = ['username' => $username, 'password' => $password, 'level' => 0];
        if (Auth::attempt($data)) {
            return redirect()->route('indexAdmin');
        } else {
            return redirect()->route('admin-login')->with('notification', 'Thông tin đăng nhập sai');
        }
    }

    public function logout()
    {
        Auth::logout();
        return redirect()->route('admin-login');
    }
    public function getCreate()
    {
        return view('backend.page.user.layout_create_user');
    }
    public function postCreate(CreateUserRequest $req)
    {
        $table = new User();
        $table->username =  $req->username;
        $table->password = bcrypt($req->password);
        $table->name = $req->name;
        $table->phone_number = $req->phoneNumber;
        $table->address = $req->address;
        $table->birthday = $req->birthday;
        $table->gender = $req->gender;
        $table->level = $req->level;
        $table->save();
        return redirect()->route('listUser')->with('notification', 'Đăng ký tài khoản thành công');
    }
    public function getList()
    {
        $data['users'] = User::paginate(12);
        $data['i'] = $data['users']->firstItem();
        return view('backend.page.user.list_user', $data);
    }
    public function getEdit(Request $req)
    {
        $data['user'] = User::find($req->id);
        return view('backend.page.user.edit_user', $data);
    }
    public function update(UpdateUserRequest $req)
    {
        $table = User::find($req->id);
        $table->name = $req->name;
        $table->birthday = $req->birthday;
        $table->gender = $req->gender;
        $table->phone_number = $req->phoneNumber;
        $table->address = $req->address;
        $table->level = $req->level;
        $table->save();
        return redirect()->route('listUser')->with('notification', 'Cập nhập thông tin người dùng thành công');
    }
    public function delete(Request $req)
    {
        User::find($req->id)->delete();
        return redirect()->route('listUser');
    }
}
