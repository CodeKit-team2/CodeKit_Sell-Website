<?php

namespace Database\Factories;

use App\Models\Product;
use App\Models\Rating;
use Illuminate\Database\Eloquent\Factories\Factory;

class RatingFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Rating::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $product_id = Product::pluck('id')->all();

        return [
            'one' => $this->faker->numberBetween(1,999),
            'two' => $this->faker->numberBetween(1,999),
            'three' => $this->faker->numberBetween(1,999),
            'four' => $this->faker->numberBetween(1,999),
            'five' => $this->faker->numberBetween(1,999),
            'product_id' =>  $this->faker->randomElement($product_id),
        ];
    }
}
