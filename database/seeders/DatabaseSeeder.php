<?php

namespace Database\Seeders;

use App\Models\Admin;
use App\Models\Category;
use App\Models\Color;
use App\Models\Customer;
use App\Models\Feedback;
use App\Models\Material;
use App\Models\Order;
use App\Models\OrderProductInfo;
use App\Models\OrderProductInfor;
use App\Models\Product;
use App\Models\ProductColor;
use App\Models\ProductColorSize;
use App\Models\ProductVoucher;
use App\Models\Rating;
use App\Models\Reply;
use App\Models\SubCategory;
use App\Models\User;
use App\Models\Voucher;
use App\Models\VoucherCustomer;
use Database\Factories\CategoryFactory;
use Database\Factories\ProductFactory;
use Database\Factories\SubCategoryFactory;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        DB::table('admins')->insert([
            'name' => 'Admin',
            'email' => 'admin@admin',
            'email_verified_at' => now(),
            'password' => Hash::make('123123123'), // password
            'status' => 'sysadmin',
            'remember_token' => Str::random(10),
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        Admin::factory(20)->create();
        Customer::factory(20)->create();

        $this->call([
            MaterialSeeder::class,
            SizeSeeder::class,
            ColorSeeder::class,
            CategorySeeder::class,
            OrderStatusSeeder::class,
        ]);

        SubCategory::factory(10)->create();
        Product::factory(20)->create();
        Order::factory(20)->create();
        ProductColor::factory(100)->create();
        ProductColorSize::factory(100)->create();
        Rating::factory(20)->create();
        Feedback::factory(20)->create();
        Reply::factory(10)->create();
        Voucher::factory(50)->create();
        OrderProductInfor::factory(20)->create();
        VoucherCustomer::factory(100)->create();
        ProductVoucher::factory(100)->create();
    }
}
