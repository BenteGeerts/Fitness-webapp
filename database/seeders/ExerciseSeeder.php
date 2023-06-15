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
            "slug" => "arnold-press",
            "icon_id" => 1,
            "image_url" => (asset("storage/exercises/Arnold-Press.gif")),
            "video_url" => "https://www.youtube.com/embed/6Z15_WdXmVw",
            "diamonds" => 4,
            "category_id" => 5,
        ]);

        DB::table("exercises")->insert([
            "name" => "Barbell Upright Row",
            "slug" => "barbell-upright-row",
            "icon_id" => 1,
            "image_url" => (asset("storage/exercises/barbell-uprightrow.gif")),
            "video_url" => "https://www.youtube.com/embed/jaAV-rD45I0",
            "diamonds" => 3,
            "category_id" => 5,
        ]);

        DB::table("exercises")->insert([
            "name" => "Dumbbell Front Raise",
            "slug" => "dumbbell-front-raise",
            "icon_id" => 1,
            "image_url" => (asset("storage/exercises/Dumbbell-Front-Raise.gif")),
            "video_url" => "https://www.youtube.com/embed/ZFNaDzE7VVc",
            "diamonds" => 5,
            "category_id" => 5,
        ]);

        DB::table("exercises")->insert([
            "name" => "Dumbbell Lateral Raise",
            "slug" => "dumbbell-lateral-raise",
            "icon_id" => 1,
            "image_url" => (asset("storage/exercises/Dumbbell-Lateral-Raise.gif")),
            "video_url" => "https://www.youtube.com/embed/3VcKaXpzqRo",
            "diamonds" => 5,
            "category_id" => 5,
        ]);

        DB::table("exercises")->insert([
            "name" => "Rear Delt Fly Machine",
            "slug" => "rear-delt-fly-machine",
            "icon_id" => 1,
            "image_url" => (asset("storage/exercises/Rear-Delt-Machine-Flys.gif")),
            "video_url" => "https://www.youtube.com/embed/6yMdhi2DVao",
            "diamonds" => 3,
            "category_id" => 5,
        ]);

        DB::table("exercises")->insert([
            "name" => "Dumbbell Shoulder Press",
            "slug" => "dumbbell-shoulder-press",
            "icon_id" => 1,
            "image_url" => (asset("storage/exercises/Dumbbell-Shoulder-Press.gif")),
            "video_url" => "https://www.youtube.com/embed/qEwKCR5JCog",
            "diamonds" => 4,
            "category_id" => 5,
        ]);

        DB::table("exercises")->insert([
            "name" => "Military Press",
            "slug" => "military-press",
            "icon_id" => 1,
            "image_url" => (asset("storage/exercises/Barbell-Military-Press.gif")),
            "video_url" => "https://www.youtube.com/embed/2yjwXTZQDDI",
            "diamonds" => 5,
            "category_id" => 5,
        ]);

        DB::table("exercises")->insert([
            "name" => "Shoulder Press Machine",
            "slug" => "shoulder-press-machine",
            "icon_id" => 1,
            "image_url" => (asset("storage/exercises/Lever-Shoulder-Press.gif")),
            "video_url" => "https://www.youtube.com/embed/Wqq43dKW1TU",
            "diamonds" => 4,
            "category_id" => 5,
        ]);

        DB::table("exercises")->insert([
            "name" => "Barbell Bent Over Row",
            "slug" => "barbell-bent-over-row",
            "icon_id" => 1,
            "image_url" => (asset("storage/exercises/Barbell-Bent-Over-Row.gif")),
            "video_url" => "https://www.youtube.com/embed/9efgcAjQe7E",
            "diamonds" => 3,
            "category_id" => 2,
        ]);

        DB::table("exercises")->insert([
            "name" => "Chin Up",
            "slug" => "chin-up",
            "icon_id" => 1,
            "image_url" => (asset("storage/exercises/Chin-Up.gif")),
            "video_url" => "https://www.youtube.com/embed/mRy9m2Q9_1I",
            "diamonds" => 5,
            "category_id" => 2,
        ]);

        DB::table("exercises")->insert([
            "name" => "Dumbbell Row",
            "slug" => "dumbbell-row",
            "icon_id" => 1,
            "image_url" => (asset("storage/exercises/Dumbbell-Row.gif")),
            "video_url" => "https://www.youtube.com/embed/pYcpY20QaE8",
            "diamonds" => 3,
            "category_id" => 2,
        ]);

        DB::table("exercises")->insert([
            "name" => "Pull Up",
            "slug" => "pull-up",
            "icon_id" => 1,
            "image_url" => (asset("storage/exercises/Pull-up.gif")),
            "video_url" => "https://www.youtube.com/embed/vw5Xmu5CIew",
            "diamonds" => 5,
            "category_id" => 2,
        ]);

        DB::table("exercises")->insert([
            "name" => "Lat Pulldown",
            "slug" => "lat-pulldown",
            "icon_id" => 1,
            "image_url" => (asset("storage/exercises/Lat-Pulldown.gif")),
            "video_url" => "https://www.youtube.com/embed/AOpi-p0cJkc",
            "diamonds" => 5,
            "category_id" => 2,
        ]);

        DB::table("exercises")->insert([
            "name" => "Seated Row Machine",
            "slug" => "seated-row-machine",
            "icon_id" => 1,
            "image_url" => (asset("storage/exercises/Seated-Row-Machine.gif")),
            "video_url" => "https://www.youtube.com/embed/8MKGArS7w7c",
            "diamonds" => 4,
            "category_id" => 2,
        ]);

        DB::table("exercises")->insert([
            "name" => "Straight Arm Pulldown",
            "slug" => "straight-arm-pulldown",
            "icon_id" => 1,
            "image_url" => (asset("storage/exercises/Rope-Straight-Arm-Pulldown.gif")),
            "video_url" => "https://www.youtube.com/embed/AjCCGN2tU3Q",
            "diamonds" => 3,
            "category_id" => 2,
        ]);

        DB::table("exercises")->insert([
            "name" => "Bench Press",
            "slug" => "bench-press",
            "icon_id" => 1,
            "image_url" => (asset("storage/exercises/Barbell-Bench-Press.gif")),
            "video_url" => "https://www.youtube.com/embed/rT7DgCr-3pg&t",
            "diamonds" => 5,
            "category_id" => 1,
        ]);

        DB::table("exercises")->insert([
            "name" => "Cable Crossover",
            "slug" => "cable-crossover",
            "icon_id" => 1,
            "image_url" => (asset("storage/exercises/Cable-Crossover.gif")),
            "video_url" => "https://www.youtube.com/embed/WEM9FCIPlxQ",
            "diamonds" => 4,
            "category_id" => 1,
        ]);

        DB::table("exercises")->insert([
            "name" => "Dumbbell Fly",
            "slug" => "dumbbell-fly",
            "icon_id" => 1,
            "image_url" => (asset("storage/exercises/Dumbbell-Fly.gif")),
            "video_url" => "https://www.youtube.com/embed/eozdVDA78K0",
            "diamonds" => 4,
            "category_id" => 1,
        ]);

        DB::table("exercises")->insert([
            "name" => "Incline Dumbbell Press",
            "slug" => "incline-dumbbell-press",
            "icon_id" => 1,
            "image_url" => (asset("storage/exercises/Incline-Dumbbell-Press.gif")),
            "video_url" => "https://www.youtube.com/embed/8iPEnn-ltC8",
            "diamonds" => 4,
            "category_id" => 1,
        ]);

        DB::table("exercises")->insert([
            "name" => "Bar Pushdown",
            "slug" => "bar-pushdown",
            "icon_id" => 1,
            "image_url" => (asset("storage/exercises/V-bar Pushdown.gif")),
            "video_url" => "https://www.youtube.com/embed/YibQv-Yiie0",
            "diamonds" => 3,
            "category_id" => 4,
        ]);

        DB::table("exercises")->insert([
            "name" => "Barbell Bicep Curl",
            "slug" => "barbell-bicep-curl",
            "icon_id" => 1,
            "image_url" => (asset("storage/exercises/Barbell-Curl.gif")),
            "video_url" => "https://www.youtube.com/embed/LY1V6UbRHFM",
            "diamonds" => 4,
            "category_id" => 4,
        ]);

        DB::table("exercises")->insert([
            "name" => "Dips",
            "slug" => "dips",
            "icon_id" => 1,
            "image_url" => (asset("storage/exercises/Triceps-Dips.gif")),
            "video_url" => "https://www.youtube.com/embed/wjUmnZH528Y",
            "diamonds" => 5,
            "category_id" => 4,
        ]);

        DB::table("exercises")->insert([
            "name" => "Dumbbell Bicep Curl",
            "slug" => "dumbbell-bicep-curl",
            "icon_id" => 1,
            "image_url" => (asset("storage/exercises/Dumbbell-Curl.gif")),
            "video_url" => "https://www.youtube.com/embed/sAq_ocpRh_I",
            "diamonds" => 5,
            "category_id" => 4,
        ]);

        DB::table("exercises")->insert([
            "name" => "Hammer Curl",
            "slug" => "hammer-curl",
            "icon_id" => 1,
            "image_url" => (asset("storage/exercises/Hammer-Curl.gif")),
            "video_url" => "https://www.youtube.com/embed/zC3nLlEvin4",
            "diamonds" => 4,
            "category_id" => 4,
        ]);

        DB::table("exercises")->insert([
            "name" => "Crunches",
            "slug" => "crunches",
            "icon_id" => 1,
            "image_url" => (asset("storage/exercises/Crunch.gif")),
            "video_url" => "https://www.youtube.com/embed/NGRKFMKhF8s",
            "diamonds" => 3,
            "category_id" => 6,
        ]);

        DB::table("exercises")->insert([
            "name" => "Leg Raise",
            "slug" => "leg-raise",
            "icon_id" => 1,
            "image_url" => (asset("storage/exercises/Lying-Leg-Raise.gif")),
            "video_url" => "https://www.youtube.com/embed/Wp4BlxcFTkE",
            "diamonds" => 4,
            "category_id" => 6,
        ]);

        DB::table("exercises")->insert([
            "name" => "Plank",
            "slug" => "plank",
            "icon_id" => 1,
            "image_url" => (asset("storage/exercises/plank.gif")),
            "video_url" => "https://www.youtube.com/embed/pSHjTRCQxIw",
            "diamonds" => 5,
            "category_id" => 6,
        ]);

        DB::table("exercises")->insert([
            "name" => "Barbell Back Squat",
            "slug" => "barbell-back-squat",
            "icon_id" => 1,
            "image_url" => (asset("storage/exercises/BARBELL-SQUAT.gif")),
            "video_url" => "https://www.youtube.com/embed/1oed-UmAxFs",
            "diamonds" => 5,
            "category_id" => 3,
        ]);

        DB::table("exercises")->insert([
            "name" => "Barbell Front Squat",
            "slug" => "barbell-front-squat",
            "icon_id" => 1,
            "image_url" => (asset("storage/exercises/front-squat.gif")),
            "video_url" => "https://www.youtube.com/embed/tlfahNdNPPI",
            "diamonds" => 5,
            "category_id" => 3,
        ]);

        DB::table("exercises")->insert([
            "name" => "Bulgarian Split Squat",
            "slug" => "bulgarian-split-squat",
            "icon_id" => 1,
            "image_url" => (asset("storage/exercises/Dumbbell-Bulgarian-Split-Squat.gif")),
            "video_url" => "https://www.youtube.com/embed/2C-uNgKwPLE",
            "diamonds" => 5,
            "category_id" => 3,
        ]);

        DB::table("exercises")->insert([
            "name" => "Hip Abduction",
            "slug" => "hip-abduction",
            "icon_id" => 1,
            "image_url" => (asset("storage/exercises/HIP-ABDUCTION-MACHINE.gif")),
            "video_url" => "https://www.youtube.com/embed/2b97cvyH9sE",
            "diamonds" => 3,
            "category_id" => 3,
        ]);

        DB::table("exercises")->insert([
            "name" => "Hip Adduction",
            "slug" => "hip-adduction",
            "icon_id" => 1,
            "image_url" => (asset("storage/exercises/HIP-ADDUCTION-MACHINE.gif")),
            "video_url" => "https://www.youtube.com/embed/GmRSV_n2E_0",
            "diamonds" => 3,
            "category_id" => 3,
        ]);

        DB::table("exercises")->insert([
            "name" => "Hip Trust",
            "slug" => "hip-trust",
            "icon_id" => 1,
            "image_url" => (asset("storage/exercises/Barbell-Hip-Thrust.gif")),
            "video_url" => "https://www.youtube.com/embed/SEdqd1n0cvg",
            "diamonds" => 5,
            "category_id" => 3,
        ]);

        DB::table("exercises")->insert([
            "name" => "Leg Curl",
            "slug" => "leg-curl",
            "icon_id" => 1,
            "image_url" => (asset("storage/exercises/Seated-Leg-Curl.gif")),
            "video_url" => "https://www.youtube.com/embed/ELOCsoDSmrg",
            "diamonds" => 5,
            "category_id" => 3,
        ]);

        DB::table("exercises")->insert([
            "name" => "Leg Extension",
            "slug" => "leg-extension",
            "icon_id" => 1,
            "image_url" => (asset("storage/exercises/LEG-EXTENSION.gif")),
            "video_url" => "https://www.youtube.com/embed/YyvSfVjQeL0",
            "diamonds" => 5,
            "category_id" => 3,
        ]);

        DB::table("exercises")->insert([
            "name" => "Leg Press",
            "slug" => "leg-press",
            "icon_id" => 1,
            "image_url" => (asset("storage/exercises/Leg-Press.gif")),
            "video_url" => "https://www.youtube.com/embed/VFk3RzndUEc",
            "diamonds" => 5,
            "category_id" => 3,
        ]);

        DB::table("exercises")->insert([
            "name" => "Deadlift",
            "slug" => "deadlift",
            "icon_id" => 1,
            "image_url" => (asset("storage/exercises/Barbell-Deadlift.gif")),
            "video_url" => "https://www.youtube.com/embed/JCXUYuzwNrM",
            "diamonds" => 5,
            "category_id" => 7,
        ]);

        DB::table("exercises")->insert([
            "name" => "Farmer Carry",
            "slug" => "farmer-carry",
            "icon_id" => 1,
            "image_url" => (asset("storage/exercises/Farmers-walk_Cardio.gif")),
            "video_url" => "https://www.youtube.com/embed/Tgi5SNDbBZQ",
            "diamonds" => 5,
            "category_id" => 7,
        ]);

        DB::table("exercises")->insert([
            "name" => "Barbell Snatch",
            "slug" => "barbell-snatch",
            "icon_id" => 1,
            "image_url" => (asset("storage/exercises/Barbell-Snatch.gif")),
            "video_url" => "https://www.youtube.com/embed/eZvy51ucmOc",
            "diamonds" => 5,
            "category_id" => 7,
        ]);
    }
}
