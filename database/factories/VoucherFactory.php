<?php

namespace Database\Factories;

use App\Models\Voucher;
use Illuminate\Database\Eloquent\Factories\Factory;

class VoucherFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Voucher::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'discount_code' => $this->faker->word(2),
            'discount' => $this->faker->numberBetween(1, 100),
            'state' => $this->faker->randomElement(['active', 'inactive']),
            'start' => $this->faker->dateTime(),
            'end' => $this->faker->dateTime(),
            'content' => $this->faker->sentence(10, true),
        ];
    }
}
