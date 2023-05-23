<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProgramSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table("training_programs")->insert([
            "name" => "Push",
            "total_diamonds" => 100,
            "level_id" => 2
        ]);

        DB::table("training_programs")->insert([
            "name" => "Pull",
            "total_diamonds" => 100,
            "level_id" => 2
        ]);

        DB::table("training_programs")->insert([
            "name" => "Legs",
            "total_diamonds" => 100,
            "level_id" => 2
        ]);

        DB::table("training_programs")->insert([
            "name" => "Full body",
            "total_diamonds" => 100,
            "level_id" => 1
        ]);

        DB::table("training_programs")->insert([
            "name" => "Upper body",
            "total_diamonds" => 100,
            "level_id" => 1
        ]);

        DB::table("training_programs")->insert([
            "name" => "Lower body",
            "total_diamonds" => 100,
            "level_id" => 1
        ]);
    }
}
