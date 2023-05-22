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
            "name" => "Push"
        ]);

        DB::table("training_programs")->insert([
            "name" => "Pull"
        ]);

        DB::table("training_programs")->insert([
            "name" => "Legs"
        ]);

        DB::table("training_programs")->insert([
            "name" => "Full body"
        ]);

        DB::table("training_programs")->insert([
            "name" => "Upper body"
        ]);

        DB::table("training_programs")->insert([
            "name" => "Lower body"
        ]);
    }
}
