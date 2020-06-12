<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\AddProductRequest;
use App\Models\Product;
use App\Models\Category;
use DB;
class ProductController extends Controller
{
    public function getProduct(){
        $data['productlist'] = DB::table('products')->join('categories','products.prod_cate','=','categories.id')->orderBy('prod_id','desc')->get();
        return view('admin.product',$data);
    }


    public function getAddProduct(){
        $data['catelist'] = Category::all();
        return view('admin.addproduct',$data);
    }


    public function postAddProduct(AddProductRequest $request){
        $product = new Product;
        $product->prod_name = $request->name;
        $product->prod_img = base64_encode(file_get_contents($request->file('img')->getRealPath()));
        $product->prod_accessories = $request->accessories;
        $product->prod_price = $request->price;
        $product->prod_warranty = $request->warranty;
        $product->prod_promotion = $request->promotion;
        $product->prod_condition = $request->condition;
        $product->prod_status = $request->status;
        $product->prod_description = $request->description;
        $product->prod_cate = $request->cate;
        $product->prod_featured = $request->featured;
        $product->save();
        return redirect('product');
    }


    public function getEditProduct($id){
        $data['product'] = Product::find($id);
        $data['catelist'] = Category::all();
        return view('admin.editproduct',$data);
    }


    public function postEditProduct(Request $request,$id){
        $product = Product::find($id);
        $product->prod_name = $request->name;
        if($request->hasFile('img')){
            $product->img = base64_encode(file_get_contents($request->file('img')->getRealPath()));
        }
        $product->prod_accessories = $request->accessories;
        $product->prod_price = $request->price;
        $product->prod_warranty = $request->warranty;
        $product->prod_promotion = $request->promotion;
        $product->prod_condition = $request->condition;
        $product->prod_status = $request->status;
        $product->prod_description = $request->description;
        $product->prod_cate = $request->cate;
        $product->prod_featured = $request->featured;
        $product->save();
        return redirect('product');
    }
    public function getDeleteProduct($id){
        Product::destroy($id);
        return back();
    }
}
