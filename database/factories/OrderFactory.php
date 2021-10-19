<?php

namespace Database\Factories;

use App\Models\Customer;
use App\Models\Order;
use App\Models\OrderStatus;
use Illuminate\Database\Eloquent\Factories\Factory;

class OrderFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Order::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $order_status_id = OrderStatus::pluck('id')->all();
        $customer_id = Customer::pluck('id')->all();

        return [
            'cost' => $this->faker->numberBetween(1,999),
            'comment' => $this->faker->paragraph(),
            'order_status_id' => $this->faker->randomElement($order_status_id),
            'customer_id' => $this->faker->randomElement($customer_id),
        ];
    }
}
