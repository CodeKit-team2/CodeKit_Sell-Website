<?php

namespace Database\Factories;

use App\Models\VoucherCustomer;
use App\Models\Voucher;
use App\Models\Customer;
use Illuminate\Database\Eloquent\Factories\Factory;

class VoucherCustomerFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = VoucherCustomer::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $customer_id = Customer::pluck('id')->all();
        $voucher_id = Voucher::pluck('id')->all();

        return [
            'count' => $this->faker->numberBetween(0, 10),
            'customer_id' => $this->faker->randomElement($customer_id),
            'voucher_id' => $this->faker->randomElement($voucher_id),
        ];
    }
}
