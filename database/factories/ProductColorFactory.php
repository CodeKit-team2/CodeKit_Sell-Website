<?php

namespace Database\Factories;

use App\Models\ProductColor;
use App\Models\Product;
use App\Models\Color;
use Illuminate\Database\Eloquent\Factories\Factory;

class ProductColorFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = ProductColor::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $product_id = Product::pluck('id')->all();
        $color_id = Color::pluck('id')->all();

        return [
            'image' => 'https://picsum.photos/300/400?random='.random_int(1, 100)."'",
            'product_id' => $this->faker->randomElement($product_id),
            'color_id' => $this->faker->randomElement($color_id),
        ];
    }
}
