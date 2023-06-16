<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AnimalSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table("animals")->insert([
            "name" => "Elephant",
            "weight" => 4900
        ]);

        DB::table("animals")->insert([
            "name" => "White rhino",
            "weight" => 2000
        ]);

        DB::table("animals")->insert([
            "name" => "Giraffe",
            "weight" => 1000
        ]);

        DB::table("animals")->insert([
            "name" => "Horse",
            "weight" => 850
        ]);

        DB::table("animals")->insert([
            "name" => "Dolphin",
            "weight" => 180
        ]);

        DB::table("animals")->insert([
            "name" => "Gorilla",
            "weight" => 160
        ]);

        DB::table("animals")->insert([
            "name" => "Green sea turtle",
            "weight" => 160
        ]);

        DB::table("animals")->insert([
            "name" => "Chimpanzee",
            "weight" => 50
        ]);

        DB::table("animals")->insert([
            "name" => "Raccoon",
            "weight" => 5
        ]);

        DB::table("animals")->insert([
            "name" => "Chicken",
            "weight" => 1.5
        ]);

    }
}
