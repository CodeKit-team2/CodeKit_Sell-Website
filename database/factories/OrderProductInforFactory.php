<?php

namespace Database\Factories;

use App\Models\Order;
use App\Models\Feedback;
use App\Models\OrderProductInfor;
use App\Models\ProductColorSize;
use Illuminate\Database\Eloquent\Factories\Factory;

class OrderProductInforFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = OrderProductInfor::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $order_id = Order::pluck('id')->all();
        $feedback_id = Feedback::pluck('id')->all();
        $product_color_size_id = ProductColorSize::pluck('id')->all();

        return [
            'quantity' => $this->faker->numberBetween(1, 10),
            'comment' => $this->faker->paragraph(),
            'oder_id' => $this->faker->randomElement($order_id),
            'feedback_id' => $this->faker->randomElement($feedback_id),
            'product_color_size_id' => $this->faker->randomElement($product_color_size_id),
            'discount' => $this->faker->numberBetween(1, 100),
            'price_after_discount' => $this->faker->numberBetween(5, 100),
        ];
    }
}
