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
        //push
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


        //pull
        DB::table("training_program_has_exercise")->insert([
            "training_program_id" => 2,
            "exercise_id" => 12
        ]);

        DB::table("training_program_has_exercise")->insert([
            "training_program_id" => 2,
            "exercise_id" => 14
        ]);

        DB::table("training_program_has_exercise")->insert([
            "training_program_id" => 2,
            "exercise_id" => 13
        ]);

        DB::table("training_program_has_exercise")->insert([
            "training_program_id" => 2,
            "exercise_id" => 23
        ]);

        DB::table("training_program_has_exercise")->insert([
            "training_program_id" => 2,
            "exercise_id" => 15
        ]);

        DB::table("training_program_has_exercise")->insert([
            "training_program_id" => 2,
            "exercise_id" => 10
        ]);


        //legs
        DB::table("training_program_has_exercise")->insert([
            "training_program_id" => 3,
            "exercise_id" => 28
        ]);

        DB::table("training_program_has_exercise")->insert([
            "training_program_id" => 3,
            "exercise_id" => 30
        ]);

        DB::table("training_program_has_exercise")->insert([
            "training_program_id" => 3,
            "exercise_id" => 31
        ]);

        DB::table("training_program_has_exercise")->insert([
            "training_program_id" => 3,
            "exercise_id" => 32
        ]);

        DB::table("training_program_has_exercise")->insert([
            "training_program_id" => 3,
            "exercise_id" => 34
        ]);

        DB::table("training_program_has_exercise")->insert([
            "training_program_id" => 3,
            "exercise_id" => 35
        ]);


        //full body
        DB::table("training_program_has_exercise")->insert([
            "training_program_id" => 4,
            "exercise_id" => 16
        ]);

        DB::table("training_program_has_exercise")->insert([
            "training_program_id" => 4,
            "exercise_id" => 12
        ]);

        DB::table("training_program_has_exercise")->insert([
            "training_program_id" => 4,
            "exercise_id" => 21
        ]);

        DB::table("training_program_has_exercise")->insert([
            "training_program_id" => 4,
            "exercise_id" => 22
        ]);

        DB::table("training_program_has_exercise")->insert([
            "training_program_id" => 4,
            "exercise_id" => 30
        ]);


        //upper body
        DB::table("training_program_has_exercise")->insert([
            "training_program_id" => 5,
            "exercise_id" => 16
        ]);

        DB::table("training_program_has_exercise")->insert([
            "training_program_id" => 5,
            "exercise_id" => 13
        ]);

        DB::table("training_program_has_exercise")->insert([
            "training_program_id" => 5,
            "exercise_id" => 14
        ]);

        DB::table("training_program_has_exercise")->insert([
            "training_program_id" => 5,
            "exercise_id" => 22
        ]);

        DB::table("training_program_has_exercise")->insert([
            "training_program_id" => 5,
            "exercise_id" => 27
        ]);

        DB::table("training_program_has_exercise")->insert([
            "training_program_id" => 5,
            "exercise_id" => 20
        ]);


        //lower body
        DB::table("training_program_has_exercise")->insert([
            "training_program_id" => 6,
            "exercise_id" => 36
        ]);

        DB::table("training_program_has_exercise")->insert([
            "training_program_id" => 6,
            "exercise_id" => 34
        ]);

        DB::table("training_program_has_exercise")->insert([
            "training_program_id" => 6,
            "exercise_id" => 35
        ]);

        DB::table("training_program_has_exercise")->insert([
            "training_program_id" => 6,
            "exercise_id" => 33
        ]);

        DB::table("training_program_has_exercise")->insert([
            "training_program_id" => 6,
            "exercise_id" => 31
        ]);

        DB::table("training_program_has_exercise")->insert([
            "training_program_id" => 6,
            "exercise_id" => 32
        ]);
    }
}
