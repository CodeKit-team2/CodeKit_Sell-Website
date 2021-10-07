<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class ShopController extends Controller
{
    //---------------ADD_CART------------------
    public function add_cart(Request $request){
        $data = $request->all();
    }

    //--------Hiển thị sp---------------------//

    public function Shop() {
        $id = DB::table('products')->get();
        return view('shop',compact('id'));
    }
    public function getProductPage($id) {
        
        return view('components.shop.product-page');
    }
}
