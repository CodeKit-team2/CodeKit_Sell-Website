<?php

namespace Database\Factories;

use App\Models\Category;
use App\Models\SubCategory;
use Illuminate\Database\Eloquent\Factories\Factory;

class SubCategoryFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = SubCategory::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $category_id = Category::pluck('id')->all();
        $gender = $this->faker->randomElement(['male', 'female', 'unidentified']);

        return [
            'gender' => $gender,
            'category_id' => $this->faker->randomElement($category_id),
        ];
    }
}
