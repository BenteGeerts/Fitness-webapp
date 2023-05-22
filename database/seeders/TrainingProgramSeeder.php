<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TrainingProgramSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table("training_program_has_exercise")->insert([
            "training_program_id" => 1,
            "exercise_id" => 16
        ]);

        DB::table("training_program_has_exercise")->insert([
            "training_program_id" => 1,
            "exercise_id" => 18
        ]);

        DB::table("training_program_has_exercise")->insert([
            "training_program_id" => 1,
            "exercise_id" => 22
        ]);

        DB::table("training_program_has_exercise")->insert([
            "training_program_id" => 1,
            "exercise_id" => 20
        ]);

        DB::table("training_program_has_exercise")->insert([
            "training_program_id" => 1,
            "exercise_id" => 8
        ]);

        DB::table("training_program_has_exercise")->insert([
            "training_program_id" => 1,
            "exercise_id" => 19
        ]);
    }
}
