<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ShopController extends Controller
{
    public function Shop() {
        return view('shop');
    }
    public function getProductPage() {
        return view('components.shop.product-page');
    }
}
