<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TrainingLevel extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table("training_levels")->insert([
           "level" => "Beginner"
        ]);

        DB::table("training_levels")->insert([
            "level" => "Intermediate"
        ]);

        DB::table("training_levels")->insert([
            "level" => "Expert"
        ]);
    }
}
