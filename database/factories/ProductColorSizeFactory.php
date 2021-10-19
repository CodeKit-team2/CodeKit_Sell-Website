<?php

namespace Database\Factories;

use App\Models\ProductColorSize;
use App\Models\ProductColor;
use App\Models\Size;
use Illuminate\Database\Eloquent\Factories\Factory;

class ProductColorSizeFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = ProductColorSize::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $product_color_id = ProductColor::pluck('id')->all();
        $size_id = Size::pluck('id')->all();

        return [
            'quantity' => $this->faker->numberBetween(1, 10),
            'price' => $this->faker->numberBetween(5, 100),
            'product_color_id' => $this->faker->randomElement($product_color_id),
            'size_id' => $this->faker->randomElement($size_id),
        ];
    }
}
