<?php

namespace Database\Factories;

use App\Models\Feedback;
use App\Models\Product;
use App\Models\Rating;
use Illuminate\Database\Eloquent\Factories\Factory;

class FeedbackFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Feedback::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {

        $rated_product_id = Product::pluck('id')->all();
        $rating_id = Rating::pluck('id')->all();

        return [
            'comment' => $this->faker->paragraph(),
            'rated_product_id' => $this->faker->randomElement($rated_product_id),
            'rating_id' => $this->faker->randomElement($rating_id),
        ];
    }
}
