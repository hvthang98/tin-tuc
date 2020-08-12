<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Categorys;
use App\Models\Typenews;

class TypeController extends Controller
{
    public function getList()
    {
        $data['categories'] = Categorys::all();
        $data['typeNews'] = Typenews::paginate(12);
        $data['stt']=$data['typeNews']->firstItem();
        $data['category_json']=json_encode($data['categories']->toarray());
        return view('backend.page.type.list_type_news',$data);
    }
    public function postType(Request $req)
    {
        $table = new Typenews();
        $table->type_name=$req->type_name;
        $table->categorys_id=$req->categorys_id;
        $table->save();
        return redirect()->route('listTypeNews')->with('notification','Thêm thể loại tin tức thành công');
    }
    public function update(Request $req)
    {
        $table = Typenews::find($req->id);
        $table->type_name = $req->type_name;
        $table->status=$req->status;
        $table->categorys_id=$req->categorys_id;
        $table->save();
        return redirect()->route('listTypeNews')->with('notification','Đã cập nhật thành công');
    }       
    public function detele(Request $req)
    {
        Typenews::find($req->id)->delete();
        return redirect()->route('listTypeNews')->with('notification','Đã xóa thể loại tin tức');
    }
}
