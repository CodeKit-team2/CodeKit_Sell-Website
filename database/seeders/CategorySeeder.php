<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $items = ['T-Shirt', 'Shirt', 'Pant', 'Jean', 'Suit', 'Shoe'];

        foreach ($items as $item) {
            DB::table('categories')->insert([
                'type' => $item,
            ]);
        }
    }
}
