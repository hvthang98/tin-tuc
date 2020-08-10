<?php

namespace App\Http\Controllers\ajax;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\User;

class CheckUser extends Controller
{
    public function check(Request $req)
    {
        $users = User::where('username',$req->username)->get();
        if(count($users)>0){
            return false;
        }
        return true;
    }
}
