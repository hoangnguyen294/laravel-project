<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Category;
use App\Http\Requests\AddCateRequest;
use App\Http\Requests\EditCateRequest;
class CategoryController extends Controller
{
    public function getCate(){
        $data['catelist'] = Category::all();
        return view('admin.category',$data);
    }
    public function postCate(AddCateRequest $request){
        $category = new Category;
        $category->name = $request->name;
        $category->slug = $request->name;
        $category->save();
        return back();
    }
    public function getEditCate($id){
        $data['cate'] = Category::find($id);

        return view('admin.editcategory',$data);
    }

    public function postEditCate(EditCateRequest $request,$id){
        $category = Category::find($id);
        $category->name = $request->name;
        $category->slug = $request->name;
        $category->save();
        return redirect('category');
    }
    public function getDeleteCate($id){
        Category::destroy($id);
        return back();
    }
}
