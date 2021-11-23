<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        DB::statement('SET FOREIGN_KEY_CHECKS=0;');
        $this->call(UsersTableSeeder::class);
        DB::statement('SET FOREIGN_KEY_CHECKS=1;');
        \App\Models\User::factory(100)->create();
        \App\Models\Banner::factory(100)->create();
        \App\Models\Category::factory(100)->create();
        \App\Models\Brand::factory(100)->create();
        \App\Models\Coupon::factory(100)->create();
        \App\Models\Product::factory(1000)->create();
        \App\Models\PostCategory::factory(100)->create();
        \App\Models\PostTag::factory(100)->create();
        \App\Models\Post::factory(100)->create();
        // $this->call(SettingTableSeeder::class);
        // $this->call(CouponSeeder::class);
    }
}
