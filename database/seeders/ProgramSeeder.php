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
            "slug" => "push",
            "total_diamonds" => 100,
            "level_id" => 2
        ]);

        DB::table("training_programs")->insert([
            "name" => "Pull",
            "slug" => "pull",
            "total_diamonds" => 100,
            "level_id" => 2
        ]);

        DB::table("training_programs")->insert([
            "name" => "Legs",
            "slug" => "legs",
            "total_diamonds" => 100,
            "level_id" => 2
        ]);

        DB::table("training_programs")->insert([
            "name" => "Full body",
            "slug" => "fullbody",
            "total_diamonds" => 100,
            "level_id" => 1
        ]);

        DB::table("training_programs")->insert([
            "name" => "Upper body",
            "slug" => "upperbody",
            "total_diamonds" => 100,
            "level_id" => 1
        ]);

        DB::table("training_programs")->insert([
            "name" => "Lower body",
            "slug" => "lowerbody",
            "total_diamonds" => 100,
            "level_id" => 1
        ]);
    }
}
