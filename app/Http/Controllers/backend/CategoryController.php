<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\CreateCategoryReq;
use App\Http\Requests\UpdateCategoryReq;
use App\Models\Category;


class CategoryController extends Controller
{
    public function getList()
    {
        $data['categories']= Category::paginate(10);
        $data['stt']=$data['categories']->firstItem();
        return view('backend.page.category.layout_list_category',$data);
    }
    public function create(CreateCategoryReq $req)
    {
        $table = new Category();
        $table->name = $req->name;
        $table->save();
        return redirect()->route('listCategory')->with('notification','Thêm danh mục thành công');
    }
    public function update(UpdateCategoryReq $req)
    {
        $table=Category::find($req->id);
        $table->name = $req->name;
        $table->status = $req->status;
        $table->save();
        return redirect()->route('listCategory')->with('notification','cập nhật danh mục thành công');
    }
    public function delete(Request $req)
    {
        Category::find($req->id)->delete();
        return redirect()->route('listCategory')->with('notification','Xóa danh mục thành công');
    }
}
