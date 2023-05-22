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
            "image_url" => (asset("storage/exercises/Arnold-Press.gif")),
            "video_url" => "https://www.youtube.com/watch?v=6Z15_WdXmVw",
            "diamonds" => 5,
            "category_id" => 5,
        ]);

        DB::table("exercises")->insert([
            "name" => "Barbell Upright Row",
            "icon_id" => 1,
            "image_url" => (asset("storage/exercises/barbell-uprightrow.gif")),
            "video_url" => "https://www.youtube.com/watch?v=jaAV-rD45I0",
            "diamonds" => 5,
            "category_id" => 5,
        ]);

        DB::table("exercises")->insert([
            "name" => "Dumbbell Front Raise",
            "icon_id" => 1,
            "image_url" => (asset("storage/exercises/Dumbbell-Front-Raise.gif")),
            "video_url" => "https://www.youtube.com/watch?v=ZFNaDzE7VVc",
            "diamonds" => 5,
            "category_id" => 5,
        ]);

        DB::table("exercises")->insert([
            "name" => "Dumbbell Lateral Raise",
            "icon_id" => 1,
            "image_url" => (asset("storage/exercises/Dumbbell-Lateral-Raise.gif")),
            "video_url" => "https://www.youtube.com/watch?v=3VcKaXpzqRo",
            "diamonds" => 5,
            "category_id" => 5,
        ]);

        DB::table("exercises")->insert([
            "name" => "Rear Delt Fly Machine",
            "icon_id" => 1,
            "image_url" => (asset("storage/exercises/Rear-Delt-Machine-Flys.gif")),
            "video_url" => "https://www.youtube.com/watch?v=6yMdhi2DVao",
            "diamonds" => 5,
            "category_id" => 5,
        ]);

        DB::table("exercises")->insert([
            "name" => "Dumbbell Shoulder Press",
            "icon_id" => 1,
            "image_url" => (asset("storage/exercises/Dumbbell-Shoulder-Press.gif")),
            "video_url" => "https://www.youtube.com/watch?v=qEwKCR5JCog",
            "diamonds" => 5,
            "category_id" => 5,
        ]);

        DB::table("exercises")->insert([
            "name" => "Military Press",
            "icon_id" => 1,
            "image_url" => (asset("storage/exercises/Barbell-Military-Press.gif")),
            "video_url" => "https://www.youtube.com/watch?v=2yjwXTZQDDI",
            "diamonds" => 5,
            "category_id" => 5,
        ]);

        DB::table("exercises")->insert([
            "name" => "Shoulder Press Machine",
            "icon_id" => 1,
            "image_url" => (asset("storage/exercises/Lever-Shoulder-Press.gif")),
            "video_url" => "https://www.youtube.com/watch?v=Wqq43dKW1TU",
            "diamonds" => 5,
            "category_id" => 5,
        ]);

        DB::table("exercises")->insert([
            "name" => "Barbell Bent Over Row",
            "icon_id" => 1,
            "image_url" => (asset("storage/exercises/Barbell-Bent-Over-Row.gif")),
            "video_url" => "https://www.youtube.com/watch?v=9efgcAjQe7E",
            "diamonds" => 5,
            "category_id" => 2,
        ]);

        DB::table("exercises")->insert([
            "name" => "Chin Up",
            "icon_id" => 1,
            "image_url" => (asset("storage/exercises/Chin-Up.gif")),
            "video_url" => "https://www.youtube.com/watch?v=mRy9m2Q9_1I",
            "diamonds" => 5,
            "category_id" => 2,
        ]);

        DB::table("exercises")->insert([
            "name" => "Dumbbell Row",
            "icon_id" => 1,
            "image_url" => (asset("storage/exercises/Dumbbell-Row.gif")),
            "video_url" => "https://www.youtube.com/watch?v=pYcpY20QaE8",
            "diamonds" => 5,
            "category_id" => 2,
        ]);

        DB::table("exercises")->insert([
            "name" => "Pull Up",
            "icon_id" => 1,
            "image_url" => (asset("storage/exercises/Pull-up.gif")),
            "video_url" => "https://www.youtube.com/watch?v=vw5Xmu5CIew",
            "diamonds" => 5,
            "category_id" => 2,
        ]);

        DB::table("exercises")->insert([
            "name" => "Lat Pulldown",
            "icon_id" => 1,
            "image_url" => (asset("storage/exercises/Lat-Pulldown.gif")),
            "video_url" => "https://www.youtube.com/watch?v=AOpi-p0cJkc",
            "diamonds" => 5,
            "category_id" => 2,
        ]);

        DB::table("exercises")->insert([
            "name" => "Seated Row Machine",
            "icon_id" => 1,
            "image_url" => (asset("storage/exercises/Seated-Row-Machine.gif")),
            "video_url" => "https://www.youtube.com/watch?v=8MKGArS7w7c",
            "diamonds" => 5,
            "category_id" => 2,
        ]);

        DB::table("exercises")->insert([
            "name" => "Straight Arm Pulldown",
            "icon_id" => 1,
            "image_url" => (asset("storage/exercises/Rope-Straight-Arm-Pulldown.gif")),
            "video_url" => "https://www.youtube.com/watch?v=AjCCGN2tU3Q",
            "diamonds" => 5,
            "category_id" => 2,
        ]);

        DB::table("exercises")->insert([
            "name" => "Bench Press",
            "icon_id" => 1,
            "image_url" => (asset("storage/exercises/Barbell-Bench-Press.gif")),
            "video_url" => "https://www.youtube.com/watch?v=rT7DgCr-3pg&t=11s",
            "diamonds" => 5,
            "category_id" => 1,
        ]);

        DB::table("exercises")->insert([
            "name" => "Cable Crossover",
            "icon_id" => 1,
            "image_url" => (asset("storage/exercises/Cable-Crossover.gif")),
            "video_url" => "https://www.youtube.com/watch?v=WEM9FCIPlxQ",
            "diamonds" => 5,
            "category_id" => 1,
        ]);

        DB::table("exercises")->insert([
            "name" => "Dumbbell Fly",
            "icon_id" => 1,
            "image_url" => (asset("storage/exercises/Dumbbell-Fly.gif")),
            "video_url" => "https://www.youtube.com/watch?v=eozdVDA78K0",
            "diamonds" => 5,
            "category_id" => 1,
        ]);

        DB::table("exercises")->insert([
            "name" => "Incline Dumbbell Press",
            "icon_id" => 1,
            "image_url" => (asset("storage/exercises/Incline-Dumbbell-Press.gif")),
            "video_url" => "https://www.youtube.com/watch?v=8iPEnn-ltC8",
            "diamonds" => 5,
            "category_id" => 1,
        ]);

        DB::table("exercises")->insert([
            "name" => "Bar Pushdown",
            "icon_id" => 1,
            "image_url" => (asset("storage/exercises/V-bar Pushdown.gif")),
            "video_url" => "https://www.youtube.com/watch?v=YibQv-Yiie0",
            "diamonds" => 5,
            "category_id" => 4,
        ]);

        DB::table("exercises")->insert([
            "name" => "Barbell Bicep Curl",
            "icon_id" => 1,
            "image_url" => (asset("storage/exercises/Barbell-Curl.gif")),
            "video_url" => "https://www.youtube.com/watch?v=LY1V6UbRHFM",
            "diamonds" => 5,
            "category_id" => 4,
        ]);

        DB::table("exercises")->insert([
            "name" => "Dips",
            "icon_id" => 1,
            "image_url" => (asset("storage/exercises/Triceps-Dips.gif")),
            "video_url" => "https://www.youtube.com/watch?v=wjUmnZH528Y",
            "diamonds" => 5,
            "category_id" => 4,
        ]);

        DB::table("exercises")->insert([
            "name" => "Dumbbell Bicep Curl",
            "icon_id" => 1,
            "image_url" => (asset("storage/exercises/Dumbbell-Curl.gif")),
            "video_url" => "https://www.youtube.com/watch?v=sAq_ocpRh_I",
            "diamonds" => 5,
            "category_id" => 4,
        ]);

        DB::table("exercises")->insert([
            "name" => "Hammer Curl",
            "icon_id" => 1,
            "image_url" => (asset("storage/exercises/Hammer-Curl.gif")),
            "video_url" => "https://www.youtube.com/watch?v=zC3nLlEvin4",
            "diamonds" => 5,
            "category_id" => 4,
        ]);

        DB::table("exercises")->insert([
            "name" => "Crunches",
            "icon_id" => 1,
            "image_url" => (asset("storage/exercises/Crunch.gif")),
            "video_url" => "https://www.youtube.com/watch?v=NGRKFMKhF8s",
            "diamonds" => 5,
            "category_id" => 6,
        ]);

        DB::table("exercises")->insert([
            "name" => "Leg Raise",
            "icon_id" => 1,
            "image_url" => (asset("storage/exercises/Lying-Leg-Raise.gif")),
            "video_url" => "https://www.youtube.com/watch?v=Wp4BlxcFTkE",
            "diamonds" => 5,
            "category_id" => 6,
        ]);

        DB::table("exercises")->insert([
            "name" => "Plank",
            "icon_id" => 1,
            "image_url" => (asset("storage/exercises/plank.gif")),
            "video_url" => "https://www.youtube.com/watch?v=pSHjTRCQxIw",
            "diamonds" => 5,
            "category_id" => 6,
        ]);

        DB::table("exercises")->insert([
            "name" => "Barbell Back Squat",
            "icon_id" => 1,
            "image_url" => (asset("storage/exercises/BARBELL-SQUAT.gif")),
            "video_url" => "https://www.youtube.com/watch?v=1oed-UmAxFs",
            "diamonds" => 5,
            "category_id" => 3,
        ]);

        DB::table("exercises")->insert([
            "name" => "Barbell Front Squat",
            "icon_id" => 1,
            "image_url" => (asset("storage/exercises/front-squat.gif")),
            "video_url" => "https://www.youtube.com/watch?v=tlfahNdNPPI",
            "diamonds" => 5,
            "category_id" => 3,
        ]);

        DB::table("exercises")->insert([
            "name" => "Bulgarian Split Squat",
            "icon_id" => 1,
            "image_url" => (asset("storage/exercises/Dumbbell-Bulgarian-Split-Squat.gif")),
            "video_url" => "https://www.youtube.com/watch?v=2C-uNgKwPLE",
            "diamonds" => 5,
            "category_id" => 3,
        ]);

        DB::table("exercises")->insert([
            "name" => "Hip Abduction",
            "icon_id" => 1,
            "image_url" => (asset("storage/exercises/HIP-ABDUCTION-MACHINE.gif")),
            "video_url" => "https://www.youtube.com/watch?v=2b97cvyH9sE",
            "diamonds" => 5,
            "category_id" => 3,
        ]);

        DB::table("exercises")->insert([
            "name" => "Hip Adduction",
            "icon_id" => 1,
            "image_url" => (asset("storage/exercises/HIP-ADDUCTION-MACHINE.gif")),
            "video_url" => "https://www.youtube.com/watch?v=GmRSV_n2E_0",
            "diamonds" => 5,
            "category_id" => 3,
        ]);

        DB::table("exercises")->insert([
            "name" => "Hip Trust",
            "icon_id" => 1,
            "image_url" => (asset("storage/exercises/Barbell-Hip-Thrust.gif")),
            "video_url" => "https://www.youtube.com/watch?v=SEdqd1n0cvg",
            "diamonds" => 5,
            "category_id" => 3,
        ]);

        DB::table("exercises")->insert([
            "name" => "Leg Curl",
            "icon_id" => 1,
            "image_url" => (asset("storage/exercises/Seated-Leg-Curl.gif")),
            "video_url" => "https://www.youtube.com/watch?v=ELOCsoDSmrg",
            "diamonds" => 5,
            "category_id" => 3,
        ]);

        DB::table("exercises")->insert([
            "name" => "Leg Extension",
            "icon_id" => 1,
            "image_url" => (asset("storage/exercises/LEG-EXTENSION.gif")),
            "video_url" => "https://www.youtube.com/watch?v=YyvSfVjQeL0",
            "diamonds" => 5,
            "category_id" => 3,
        ]);

        DB::table("exercises")->insert([
            "name" => "Leg Press",
            "icon_id" => 1,
            "image_url" => (asset("storage/exercises/Leg-Press.gif")),
            "video_url" => "https://www.youtube.com/watch?v=VFk3RzndUEc",
            "diamonds" => 5,
            "category_id" => 3,
        ]);

        DB::table("exercises")->insert([
            "name" => "Deadlift",
            "icon_id" => 1,
            "image_url" => (asset("storage/exercises/Barbell-Deadlift.gif")),
            "video_url" => "https://www.youtube.com/watch?v=JCXUYuzwNrM",
            "diamonds" => 5,
            "category_id" => 7,
        ]);

        DB::table("exercises")->insert([
            "name" => "Farmer Carry",
            "icon_id" => 1,
            "image_url" => (asset("storage/exercises/Farmers-walk_Cardio.gif")),
            "video_url" => "https://www.youtube.com/watch?v=Tgi5SNDbBZQ",
            "diamonds" => 5,
            "category_id" => 7,
        ]);

        DB::table("exercises")->insert([
            "name" => "Barbell Snatch",
            "icon_id" => 1,
            "image_url" => (asset("storage/exercises/Barbell-Snatch.gif")),
            "video_url" => "https://www.youtube.com/watch?v=eZvy51ucmOc",
            "diamonds" => 5,
            "category_id" => 7,
        ]);
    }
}
