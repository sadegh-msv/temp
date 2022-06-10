<?php

namespace Database\Seeders;


use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(): void
    {
        DB::table('categories')->insert([
            'name' => Str::random(10),
            'parent_id' => rand(1, 10),
            'status' => true,
            //Hash::make('password'),
        ]);
    }
}
