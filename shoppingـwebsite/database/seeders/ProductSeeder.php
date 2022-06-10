<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('products')->insert([
            'name' => Str::random(10),
            'price' => rand(1000, 9999),
            'stock' => rand(1,100),
            'sell_count' => rand(1, 1000),
            'seen_product' => rand(0, 200),
            'category_id' => 1,
            //Hash::make('password'),
        ]);
    }
}
