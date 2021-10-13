<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Redirect;
use DB;

class ShopController extends Controller
{
    //---------------ADD_CART------------------
    public function add_cart(Request $request ,$v){
        $data = $request->all();
        $admin_product = DB::table('products_admin')->where('pa_id',$v)->get();
        foreach ($admin_product as $admin_product) {
            $pa_id = $admin_product->pa_id;
            $pa_images = $admin_product->pa_images;
            $pa_name = $admin_product->pa_name;
            $pa_prices = $admin_product->pa_prices;
        }
        $try = DB::table('products')->where('p_id',$v)->get();
        if($try->count()==0){
            $product_user = DB::table('products')->insert([
                'p_id' => $pa_id,
                'p_images' => $pa_images,
                'p_name' => $pa_name,
                'p_quantity' => 1,
                'p_prices' => $pa_prices
            ]);
            return redirect()->back()->with('success', 'your message,here');
        }else return redirect()->back()->with('fail', 'your message,here');        // Việc còn lại là add vào giỏ hàng
    }

    //--------Hiển thị sp---------------------//

    public function Shop() {
        $id = DB::table('products_admin')->get();
        return view('shop',compact('id'));
    }
    public function getProduct($id) {
        $item = DB::table('products_admin')->where('pa_id',$id)->get();
        return view('components.shop.product-page',compact('item'));
    }
}
