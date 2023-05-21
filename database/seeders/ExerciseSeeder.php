<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ExerciseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table("exercises")->insert([
            "name" => "Arnold Press",
            "icon_id" => 1,
            "image_url" => "https://picsum.photos/200/300",
            "video_url" => "https://www.youtube.com/watch?v=6Z15_WdXmVw",
            "diamonds" => 5,
            "category_id" => 5,
        ]);

        DB::table("exercises")->insert([
            "name" => "Barbell Upright Row",
            "icon_id" => 1,
            "image_url" => "https://picsum.photos/200/300",
            "video_url" => "https://www.youtube.com/watch?v=jaAV-rD45I0",
            "diamonds" => 5,
            "category_id" => 5,
        ]);
    }
}
