<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Typenews;
use App\Models\Categorys;
class AjaxController extends Controller
{
    public function category($id){
    	$type = Typenews::where('categorys_id', $id)->get();
    	foreach ($type as $ty) {
    		echo " <option value=".$ty->id." >$ty->type_name</option>";
    	}
    }
}
