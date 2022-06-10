<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class OrderSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(): void
    {
        DB::table('orders')->insert([
            'user_id' => 1,
            'product_id' => 1,
            'count_order' => rand(1,100),
            'total_price' => rand(1, 1000),
            //Hash::make('password'),
        ]);
    }
}
