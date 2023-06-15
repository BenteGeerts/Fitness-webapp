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
            "common_mistakes" => "Pressing too far forward\nUsing momentum\nNot Rotating Enough\nRotating Your Hands, Not Your Arms\nUsing a Short Range of Motion",
            "diamonds" => 4,
            "category_id" => 5,
        ]);

        DB::table("exercises")->insert([
            "name" => "Barbell Upright Row",
            "slug" => "barbell-upright-row",
            "icon_id" => 1,
            "image_url" => (asset("storage/exercises/barbell-uprightrow.gif")),
            "video_url" => "https://www.youtube.com/embed/jaAV-rD45I0",
            "common_mistakes" => "Not Controlling the Descent\nBar Travelling Too Far From Your Body\nGrip Position",
            "diamonds" => 3,
            "category_id" => 5,
        ]);

        DB::table("exercises")->insert([
            "name" => "Dumbbell Front Raise",
            "slug" => "dumbbell-front-raise",
            "icon_id" => 1,
            "image_url" => (asset("storage/exercises/Dumbbell-Front-Raise.gif")),
            "video_url" => "https://www.youtube.com/embed/ZFNaDzE7VVc",
            "common_mistakes" => "Wrist Position\nBending the Elbows Too Much\nSwinging Your Weights",
            "diamonds" => 5,
            "category_id" => 5,
        ]);

        DB::table("exercises")->insert([
            "name" => "Dumbbell Lateral Raise",
            "slug" => "dumbbell-lateral-raise",
            "icon_id" => 1,
            "image_url" => (asset("storage/exercises/Dumbbell-Lateral-Raise.gif")),
            "video_url" => "https://www.youtube.com/embed/3VcKaXpzqRo",
            "common_mistakes" => "Using a Weight That’s Too Heavy\nNot Pausing at the Top of the Movement\nTwisting your wrists",
            "diamonds" => 5,
            "category_id" => 5,
        ]);

        DB::table("exercises")->insert([
            "name" => "Rear Delt Fly Machine",
            "slug" => "rear-delt-fly-machine",
            "icon_id" => 1,
            "image_url" => (asset("storage/exercises/Rear-Delt-Machine-Flys.gif")),
            "video_url" => "https://www.youtube.com/embed/6yMdhi2DVao",
            "common_mistakes" => "Gripping the handles too tightly\nShrugging upwards\nRushing the motion",
            "diamonds" => 3,
            "category_id" => 5,
        ]);

        DB::table("exercises")->insert([
            "name" => "Dumbbell Shoulder Press",
            "slug" => "dumbbell-shoulder-press",
            "icon_id" => 1,
            "image_url" => (asset("storage/exercises/Dumbbell-Shoulder-Press.gif")),
            "video_url" => "https://www.youtube.com/embed/qEwKCR5JCog",
            "common_mistakes" => "Leaning Back Excessively\nNot Locking Your Elbows Out\nForcing Unnatural Movement Patterns",
            "diamonds" => 4,
            "category_id" => 5,
        ]);

        DB::table("exercises")->insert([
            "name" => "Military Press",
            "slug" => "military-press",
            "icon_id" => 1,
            "image_url" => (asset("storage/exercises/Barbell-Military-Press.gif")),
            "video_url" => "https://www.youtube.com/embed/2yjwXTZQDDI",
            "common_mistakes" => "Incorrect Grip Width\nWrists Are Too Bent\nElbows Flaring Out\nToo Much Lower Back Arching\nPressing the Bar Forwards",
            "diamonds" => 5,
            "category_id" => 5,
        ]);

        DB::table("exercises")->insert([
            "name" => "Shoulder Press Machine",
            "slug" => "shoulder-press-machine",
            "icon_id" => 1,
            "image_url" => (asset("storage/exercises/Lever-Shoulder-Press.gif")),
            "video_url" => "https://www.youtube.com/embed/Wqq43dKW1TU",
            "common_mistakes" => "Pressing one arm higher than the other\nSlamming the dumbbells together\n Not using a full range of motion.",
            "diamonds" => 4,
            "category_id" => 5,
        ]);

        DB::table("exercises")->insert([
            "name" => "Barbell Bent Over Row",
            "slug" => "barbell-bent-over-row",
            "icon_id" => 1,
            "image_url" => (asset("storage/exercises/Barbell-Bent-Over-Row.gif")),
            "video_url" => "https://www.youtube.com/embed/9efgcAjQe7E",
            "common_mistakes" => "Keeping Your Legs Straight During The Lift\nNot Bending Over Enough During The Movement\nStanding Up During Your Reps\nKeeping Too Much Tension In Your Neck & Spine\nNot Keeping Your Chest Up During Reps",
            "diamonds" => 3,
            "category_id" => 2,
        ]);

        DB::table("exercises")->insert([
            "name" => "Chin Up",
            "slug" => "chin-up",
            "icon_id" => 1,
            "image_url" => (asset("storage/exercises/Chin-Up.gif")),
            "video_url" => "https://www.youtube.com/embed/mRy9m2Q9_1I",
            "common_mistakes" => "Using too much momentum\nForgetting to brace your core\nYou aren’t engaging your shoulders from the start",
            "diamonds" => 5,
            "category_id" => 2,
        ]);

        DB::table("exercises")->insert([
            "name" => "Dumbbell Row",
            "slug" => "dumbbell-row",
            "icon_id" => 1,
            "image_url" => (asset("storage/exercises/Dumbbell-Row.gif")),
            "video_url" => "https://www.youtube.com/embed/pYcpY20QaE8",
            "common_mistakes" => "No deep stretch\nRotating torso\nRelying on your biceps",
            "diamonds" => 3,
            "category_id" => 2,
        ]);

        DB::table("exercises")->insert([
            "name" => "Pull Up",
            "slug" => "pull-up",
            "icon_id" => 1,
            "image_url" => (asset("storage/exercises/Pull-up.gif")),
            "video_url" => "https://www.youtube.com/embed/vw5Xmu5CIew",
            "common_mistakes" => "Not leading with your chest\nNarrow hand placement\nForgetting to train your forearms",
            "diamonds" => 5,
            "category_id" => 2,
        ]);

        DB::table("exercises")->insert([
            "name" => "Lat Pulldown",
            "slug" => "lat-pulldown",
            "icon_id" => 1,
            "image_url" => (asset("storage/exercises/Lat-Pulldown.gif")),
            "video_url" => "https://www.youtube.com/embed/AOpi-p0cJkc",
            "common_mistakes" => "Not Pulling The Bar Low Enough\nToo Much Momentum\noo Much or Not Enough Elbow Bending",
            "diamonds" => 5,
            "category_id" => 2,
        ]);

        DB::table("exercises")->insert([
            "name" => "Seated Row Machine",
            "slug" => "seated-row-machine",
            "icon_id" => 1,
            "image_url" => (asset("storage/exercises/Seated-Row-Machine.gif")),
            "video_url" => "https://www.youtube.com/embed/8MKGArS7w7c",
            "common_mistakes" => "Poor posture\nNot adjusting the seat or footrest\nJerking or using momentum\n Gripping the handles incorrectly",
            "diamonds" => 4,
            "category_id" => 2,
        ]);

        DB::table("exercises")->insert([
            "name" => "Straight Arm Pulldown",
            "slug" => "straight-arm-pulldown",
            "icon_id" => 1,
            "image_url" => (asset("storage/exercises/Rope-Straight-Arm-Pulldown.gif")),
            "video_url" => "https://www.youtube.com/embed/AjCCGN2tU3Q",
            "common_mistakes" => "Bending the elbows\nRounding the back\nOverarching the lower back\n Not fully extending or squeezing at the bottom",
            "diamonds" => 3,
            "category_id" => 2,
        ]);

        DB::table("exercises")->insert([
            "name" => "Bench Press",
            "slug" => "bench-press",
            "icon_id" => 1,
            "image_url" => (asset("storage/exercises/Barbell-Bench-Press.gif")),
            "video_url" => "https://www.youtube.com/embed/rT7DgCr-3pg&t",
            "common_mistakes" => "Going too heavy\nFlaring elbows out at 90° angles\nBending wrists backwards\nNot keeping the feet grounded\n Pressing with a thumbless grip",
            "diamonds" => 5,
            "category_id" => 1,
        ]);

        DB::table("exercises")->insert([
            "name" => "Cable Crossover",
            "slug" => "cable-crossover",
            "icon_id" => 1,
            "image_url" => (asset("storage/exercises/Cable-Crossover.gif")),
            "video_url" => "https://www.youtube.com/embed/WEM9FCIPlxQ",
            "common_mistakes" => "Improper cable height\nLack of control and swinging\nGripping the handles too tightly",
            "diamonds" => 4,
            "category_id" => 1,
        ]);

        DB::table("exercises")->insert([
            "name" => "Dumbbell Fly",
            "slug" => "dumbbell-fly",
            "icon_id" => 1,
            "image_url" => (asset("storage/exercises/Dumbbell-Fly.gif")),
            "video_url" => "https://www.youtube.com/embed/eozdVDA78K0",
            "common_mistakes" => "Locking out your arms\nOverstretching\nGoing down too fast",
            "diamonds" => 4,
            "category_id" => 1,
        ]);

        DB::table("exercises")->insert([
            "name" => "Incline Dumbbell Press",
            "slug" => "incline-dumbbell-press",
            "icon_id" => 1,
            "image_url" => (asset("storage/exercises/Incline-Dumbbell-Press.gif")),
            "video_url" => "https://www.youtube.com/embed/8iPEnn-ltC8",
            "common_mistakes" => "Wrong incline\nHips coming up\nBack arch and shoulder retraction\nElbow position",
            "diamonds" => 4,
            "category_id" => 1,
        ]);

        DB::table("exercises")->insert([
            "name" => "Bar Pushdown",
            "slug" => "bar-pushdown",
            "icon_id" => 1,
            "image_url" => (asset("storage/exercises/V-bar Pushdown.gif")),
            "video_url" => "https://www.youtube.com/embed/YibQv-Yiie0",
            "common_mistakes" => "Incorrect grip\nLimited range of motion\nInsufficient contraction\nNeglecting proper breathing",
            "diamonds" => 3,
            "category_id" => 4,
        ]);

        DB::table("exercises")->insert([
            "name" => "Barbell Bicep Curl",
            "slug" => "barbell-bicep-curl",
            "icon_id" => 1,
            "image_url" => (asset("storage/exercises/Barbell-Curl.gif")),
            "video_url" => "https://www.youtube.com/embed/LY1V6UbRHFM",
            "common_mistakes" => "Elbow movement\nWrist positioning\nPoor control during the eccentric phase\nLifting the bar too high",
            "diamonds" => 4,
            "category_id" => 4,
        ]);

        DB::table("exercises")->insert([
            "name" => "Dips",
            "slug" => "dips",
            "icon_id" => 1,
            "image_url" => (asset("storage/exercises/Triceps-Dips.gif")),
            "video_url" => "https://www.youtube.com/embed/wjUmnZH528Y",
            "common_mistakes" => "Dipping not low enough\nElbows to far apart\n Not warmed-up",
            "diamonds" => 5,
            "category_id" => 4,
        ]);

        DB::table("exercises")->insert([
            "name" => "Dumbbell Bicep Curl",
            "slug" => "dumbbell-bicep-curl",
            "icon_id" => 1,
            "image_url" => (asset("storage/exercises/Dumbbell-Curl.gif")),
            "video_url" => "https://www.youtube.com/embed/sAq_ocpRh_I",
            "common_mistakes" => "Gripping the dumbbells too tightly\nCurling the weights too quickly\nNeglecting the eccentric phase\nNot using a full range of motion",
            "diamonds" => 5,
            "category_id" => 4,
        ]);

        DB::table("exercises")->insert([
            "name" => "Hammer Curl",
            "slug" => "hammer-curl",
            "icon_id" => 1,
            "image_url" => (asset("storage/exercises/Hammer-Curl.gif")),
            "video_url" => "https://www.youtube.com/embed/zC3nLlEvin4",
            "common_mistakes" => "Too much excessive body movement\nNot keeping neutral wrist alignment\nElbow drift",
            "diamonds" => 4,
            "category_id" => 4,
        ]);

        DB::table("exercises")->insert([
            "name" => "Crunches",
            "slug" => "crunches",
            "icon_id" => 1,
            "image_url" => (asset("storage/exercises/Crunch.gif")),
            "video_url" => "https://www.youtube.com/embed/NGRKFMKhF8s",
            "common_mistakes" => "Sitting up too high\nArching your back\nStraining your neck\nUsing Shoulder muscles to do the curl",
            "diamonds" => 3,
            "category_id" => 6,
        ]);

        DB::table("exercises")->insert([
            "name" => "Leg Raise",
            "slug" => "leg-raise",
            "icon_id" => 1,
            "image_url" => (asset("storage/exercises/Lying-Leg-Raise.gif")),
            "video_url" => "https://www.youtube.com/embed/Wp4BlxcFTkE",
            "common_mistakes" => "Dropping Your Legs Too Quickly\nArching Your Lower Back\nAllowing Your Shoulders to Shrug Up",
            "diamonds" => 4,
            "category_id" => 6,
        ]);

        DB::table("exercises")->insert([
            "name" => "Plank",
            "slug" => "plank",
            "icon_id" => 1,
            "image_url" => (asset("storage/exercises/plank.gif")),
            "video_url" => "https://www.youtube.com/embed/pSHjTRCQxIw",
            "common_mistakes" => "Sagging or lifting the hips\nCollapsing the shoulders\nHolding your breath\nNot engaging the entire body",
            "diamonds" => 5,
            "category_id" => 6,
        ]);

        DB::table("exercises")->insert([
            "name" => "Barbell Back Squat",
            "slug" => "barbell-back-squat",
            "icon_id" => 1,
            "image_url" => (asset("storage/exercises/BARBELL-SQUAT.gif")),
            "video_url" => "https://www.youtube.com/embed/1oed-UmAxFs",
            "common_mistakes" => "Incorrect foot placement\nInadequate dept\nRounded back\nLack of core engagement\nExcessive forward lean",
            "diamonds" => 5,
            "category_id" => 3,
        ]);

        DB::table("exercises")->insert([
            "name" => "Barbell Front Squat",
            "slug" => "barbell-front-squat",
            "icon_id" => 1,
            "image_url" => (asset("storage/exercises/front-squat.gif")),
            "video_url" => "https://www.youtube.com/embed/tlfahNdNPPI",
            "common_mistakes" => "Not staying vertical enough.\nNot developing proper shoulder and wrist flexibility.\nNot squatting deep enough: ankle and hip mobility.\nPressing the weight against your throat",
            "diamonds" => 5,
            "category_id" => 3,
        ]);

        DB::table("exercises")->insert([
            "name" => "Bulgarian Split Squat",
            "slug" => "bulgarian-split-squat",
            "icon_id" => 1,
            "image_url" => (asset("storage/exercises/Dumbbell-Bulgarian-Split-Squat.gif")),
            "video_url" => "https://www.youtube.com/embed/2C-uNgKwPLE",
            "common_mistakes" => "Placing the Back Leg Directly Behind the Front\nLeaning Too Far Forward From the Hips\nRising Onto the Toes\nAllowing the Front Knee to Lose Alignment",
            "diamonds" => 5,
            "category_id" => 3,
        ]);

        DB::table("exercises")->insert([
            "name" => "Hip Abduction",
            "slug" => "hip-abduction",
            "icon_id" => 1,
            "image_url" => (asset("storage/exercises/HIP-ABDUCTION-MACHINE.gif")),
            "video_url" => "https://www.youtube.com/embed/2b97cvyH9sE",
            "common_mistakes" => "Allowing the pelvis to tilt\nUsing improper foot positioning\nOverloading with excessive resistance",
            "diamonds" => 3,
            "category_id" => 3,
        ]);

        DB::table("exercises")->insert([
            "name" => "Hip Adduction",
            "slug" => "hip-adduction",
            "icon_id" => 1,
            "image_url" => (asset("storage/exercises/HIP-ADDUCTION-MACHINE.gif")),
            "video_url" => "https://www.youtube.com/embed/GmRSV_n2E_0",
            "common_mistakes" => "Relying on other muscle groups\nLifting the hips off the bench\nNeglecting equal effort on both sides",
            "diamonds" => 3,
            "category_id" => 3,
        ]);

        DB::table("exercises")->insert([
            "name" => "Hip Trust",
            "slug" => "hip-trust",
            "icon_id" => 1,
            "image_url" => (asset("storage/exercises/Barbell-Hip-Thrust.gif")),
            "video_url" => "https://www.youtube.com/embed/SEdqd1n0cvg",
            "common_mistakes" => "Incorrect bar placement\nOverarching or hyperextending the lower back\nInsufficient glute activation",
            "diamonds" => 5,
            "category_id" => 3,
        ]);

        DB::table("exercises")->insert([
            "name" => "Leg Curl",
            "slug" => "leg-curl",
            "icon_id" => 1,
            "image_url" => (asset("storage/exercises/Seated-Leg-Curl.gif")),
            "video_url" => "https://www.youtube.com/embed/ELOCsoDSmrg",
            "common_mistakes" => "Improper seat and pad adjustment\nNot fully extending or flexing the legsAllowing momentum to take over\n Rushing Reps",
            "diamonds" => 5,
            "category_id" => 3,
        ]);

        DB::table("exercises")->insert([
            "name" => "Leg Extension",
            "slug" => "leg-extension",
            "icon_id" => 1,
            "image_url" => (asset("storage/exercises/LEG-EXTENSION.gif")),
            "video_url" => "https://www.youtube.com/embed/YyvSfVjQeL0",
            "common_mistakes" => "Incorrect seat and pad adjustment\nUsing excessive weight\nNot fully extending or flexing the legs",
            "diamonds" => 5,
            "category_id" => 3,
        ]);

        DB::table("exercises")->insert([
            "name" => "Leg Press",
            "slug" => "leg-press",
            "icon_id" => 1,
            "image_url" => (asset("storage/exercises/Leg-Press.gif")),
            "video_url" => "https://www.youtube.com/embed/VFk3RzndUEc",
            "common_mistakes" => "Failing to adjust the seat and backrest\nArching your lower back\nExcessive knee flexion\nImproper foot placement",
            "diamonds" => 5,
            "category_id" => 3,
        ]);

        DB::table("exercises")->insert([
            "name" => "Deadlift",
            "slug" => "deadlift",
            "icon_id" => 1,
            "image_url" => (asset("storage/exercises/Barbell-Deadlift.gif")),
            "video_url" => "https://www.youtube.com/embed/JCXUYuzwNrM",
            "common_mistakes" => "Rounded back\nImproper grip\nStarting with the bar too far from your body\nPoor hip and knee alignment\nLifting with your back instead of your legs\nNeglecting proper warm-up",
            "diamonds" => 5,
            "category_id" => 7,
        ]);

        DB::table("exercises")->insert([
            "name" => "Farmer Carry",
            "slug" => "farmer-carry",
            "icon_id" => 1,
            "image_url" => (asset("storage/exercises/Farmers-walk_Cardio.gif")),
            "video_url" => "https://www.youtube.com/embed/Tgi5SNDbBZQ",
            "common_mistakes" => "Struggling to maintain balance\nLetting the weights swing or sway\nGripping the weights too tightly",
            "diamonds" => 5,
            "category_id" => 7,
        ]);

        DB::table("exercises")->insert([
            "name" => "Barbell Snatch",
            "slug" => "barbell-snatch",
            "icon_id" => 1,
            "image_url" => (asset("storage/exercises/Barbell-Snatch.gif")),
            "video_url" => "https://www.youtube.com/embed/eZvy51ucmOc",
            "common_mistakes" => "Lack of shoulder mobility\nNot generating enough power from the legs\nInsufficient core engagement\nUsing too much weight too soon",
            "diamonds" => 5,
            "category_id" => 7,
        ]);
    }
}
