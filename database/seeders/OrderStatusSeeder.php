<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class OrderStatusSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $items = ['Pending', 'Awaiting Pickup', 'Shipping', 'Declined', 'Cancelled', 'Completed'];

        foreach ($items as $item) {
            DB::table('order_statuses')->insert([
                'status' => $item,
            ]);
        }
    }
}
