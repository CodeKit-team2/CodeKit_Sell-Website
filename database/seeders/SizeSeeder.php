<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SizeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $items = ['XS', 'S', 'M', 'L', 'XL'];

        foreach ($items as $item) {
            DB::table('sizes')->insert([
                'name' => $item,
            ]);
        }
    }
}
