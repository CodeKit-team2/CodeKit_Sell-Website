<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\ProductColor;
use App\Models\ProductColorSize;

/*
    'name' => '',
    'discription' => '',
    'type' => '',
    'material' => '',
    'gender' => '',
    'image' => '',
    'color_code' => '',
    'quantity' => '',
    'price' => '',
    'size' => '',
    'voucher' => '',
*/

class ProductController extends Controller
{
    public $product;
    public $product_color;
    public $product_color_size;

    public array $size = [];

    public function create($id)
    {
        $this->setData($id);

        return view('admin.product-update', ['data' => $this->getData()]);
    }

    private function setData($id)
    {
        $this->product_color = ProductColor::firstWhere('id', $id);
        $this->product = $this->product_color->product;
        $this->product_color_size = ProductColorSize::where('product_color_id', $this->product_color->id)->get()->all();

        foreach ($this->product_color_size as $item) {
            array_push($this->size, ['size' => $item->size->name, 'quantity' => $item->quantity, 'price' => $item->price]);
        }
    }

    public function getData() {
        return $data = [
          'name' => $this->product->name,
            'discription' => $this->product->discription,
            'material' => $this->product->material->name,
            'gender' => $this->product->sub_category->gender,
            'type' => $this->product->sub_category->category->type,
            'color' => $this->product_color->color->code,
            'size' => $this->size,
        ];
    }
}
