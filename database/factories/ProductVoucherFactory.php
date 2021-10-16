<?php

namespace Database\Factories;

use App\Models\ProductVoucher;
use App\Models\Product;
use App\Models\Voucher;
use Illuminate\Database\Eloquent\Factories\Factory;

class ProductVoucherFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = ProductVoucher::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $product_id = Product::pluck('id')->all();
        $voucher_id = Voucher::pluck('id')->all();

        return [
            'product_id' => $this->faker->randomElement($product_id),
            'voucher_id' => $this->faker->randomElement($voucher_id),
        ];
    }
}
