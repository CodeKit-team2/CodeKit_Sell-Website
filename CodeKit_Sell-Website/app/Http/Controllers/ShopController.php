<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class ShopController extends Controller
{
    //---------------ADD_CART------------------
    public function add_cart(Request $request){
        $data = $request->all();
        dd($data);
        // Việc còn lại là add vào giỏ hàng
    }

    //--------Hiển thị sp---------------------//

    public function Shop() {
        $id = DB::table('products')->get();
        return view('shop',compact('id'));
    }
    public function getProduct($id) {
        $item = DB::table('products')->where('p_id',$id)->get();
        return view('components.shop.product-page',compact('item'));
    }
}
