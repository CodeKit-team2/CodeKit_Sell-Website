<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ColorSeeder extends Seeder
{
    /**green hex code
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $items= [
            ['Red', 'FF0000'],
            ['White', 'FFFFFF'],
            ['Blue', '0000FF'],
            ['Green', '00FF00'],
            ['Yellow', 'FFFF00'],
            ['Black', '000000'],
        ];

        foreach ($items as $item) {
            DB::table('colors')->insert([
                'name' => $item[0],
                'code' => $item[1],
            ]);
        }
    }
}
