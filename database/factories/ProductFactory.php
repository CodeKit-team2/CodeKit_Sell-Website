<?php

namespace Database\Factories;

use App\Models\Product;
use App\Models\SubCategory;
use App\Models\Material;
use Illuminate\Database\Eloquent\Factories\Factory;

class ProductFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Product::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $sub_category_id = SubCategory::pluck('id')->all();
        $material_id = Material::pluck('id')->all();

        return [
            'name' => $this->faker->unique()->name(),
            'discription' => $this->faker->paragraph(6),
            'sub_category_id' => $this->faker->randomElement($sub_category_id),
            'material_id' => $this->faker->randomElement($material_id),
        ];
    }
}
