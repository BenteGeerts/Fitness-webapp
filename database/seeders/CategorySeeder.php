<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
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
        DB::table("categories")->insert([
           "category" => "Chest",
        ]);

        DB::table("categories")->insert([
            "category" => "Back",
        ]);

        DB::table("categories")->insert([
            "category" => "Legs",
        ]);

        DB::table("categories")->insert([
            "category" => "Arms",
        ]);

        DB::table("categories")->insert([
            "category" => "Shoulders",
        ]);

        DB::table("categories")->insert([
            "category" => "Core",
        ]);

        DB::table("categories")->insert([
            "category" => "Full body",
        ]);
    }
}
