<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Cart;
use App\Models\Product;
class CartController extends Controller
{
    public function getAddCart($id){
        $product = Product::find($id);
        Cart::add(['id' => $id, 'name' => $product->prod_name, 'quantity' => 1,'price' => $product->prod_price, 'options' => ['img' => $product->prod_img ]]);
        return redirect('cart/show');
    }

    public function getShowCart(){
        $data['items'] = Cart::getContent();
        return view('pages.cart',$data);
    }
}
