<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class GoalSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table("users_goal")->insert([
            "goal" => "Lose weight"
        ]);

        DB::table("users_goal")->insert([
            "goal" => "Gain weight"
        ]);

        DB::table("users_goal")->insert([
            "goal" => "Gain muscle"
        ]);
    }
}
