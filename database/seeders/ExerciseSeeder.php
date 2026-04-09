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

        // ── CHEST ──────────────────────────────────────────────────────────────

        DB::table("exercises")->insert([
            "name" => "Push Up",
            "slug" => "push-up",
            "icon_id" => 1,
            "image_url" => (asset("storage/exercises/push-up.gif")),
            "video_url" => "https://www.youtube.com/embed/IODxDxX7oi4",
            "common_mistakes" => "Sagging hips instead of keeping a straight body line\nFlaring elbows out at 90° angles\nNot going to full depth\nFailing to engage the core throughout the movement",
            "diamonds" => 3,
            "category_id" => 1,
        ]);

        DB::table("exercises")->insert([
            "name" => "Incline Barbell Bench Press",
            "slug" => "incline-barbell-bench-press",
            "icon_id" => 1,
            "image_url" => (asset("storage/exercises/Incline-Barbell-Bench-Press.gif")),
            "video_url" => "https://www.youtube.com/embed/jPLdzuHckI8",
            "common_mistakes" => "Setting the bench angle too steep\nBouncing the bar off your chest\nFlaring your elbows excessively\nLifting your butt off the bench",
            "diamonds" => 5,
            "category_id" => 1,
        ]);

        DB::table("exercises")->insert([
            "name" => "Decline Bench Press",
            "slug" => "decline-bench-press",
            "icon_id" => 1,
            "image_url" => (asset("storage/exercises/Decline-Barbell-Bench-Press.gif")),
            "video_url" => "https://www.youtube.com/embed/OR8CkNi_R6c",
            "common_mistakes" => "Using too much weight before mastering the movement\nBouncing the bar off the lower chest\nNot securing your feet properly in the pads\nFlaring elbows out too wide",
            "diamonds" => 4,
            "category_id" => 1,
        ]);

        DB::table("exercises")->insert([
            "name" => "Pec Deck Fly Machine",
            "slug" => "pec-deck-fly-machine",
            "icon_id" => 1,
            "image_url" => (asset("storage/exercises/Pec-Deck-Fly-Machine.gif")),
            "video_url" => "https://www.youtube.com/embed/Z57CtFmRMxA",
            "common_mistakes" => "Overstretching the chest\nUsing too much weight and relying on momentum\nNot controlling the eccentric phase\nShrugging the shoulders during the movement",
            "diamonds" => 3,
            "category_id" => 1,
        ]);

        DB::table("exercises")->insert([
            "name" => "Cable Chest Fly",
            "slug" => "cable-chest-fly",
            "icon_id" => 1,
            "image_url" => (asset("storage/exercises/cable-chest-fly.gif")),
            "video_url" => "https://www.youtube.com/embed/ta1SLNElKes",
            "common_mistakes" => "Straightening the arms completely and straining the elbows\nLeaning too far forward and turning it into a press\nNot maintaining a slight fixed bend in the elbows\nAllowing the cables to pull your arms too far back",
            "diamonds" => 4,
            "category_id" => 1,
        ]);

        // ── BACK ───────────────────────────────────────────────────────────────

        DB::table("exercises")->insert([
            "name" => "T-Bar Row",
            "slug" => "t-bar-row",
            "icon_id" => 1,
            "image_url" => (asset("storage/exercises/t-bar-row.gif")),
            "video_url" => "https://www.youtube.com/embed/j3dCcx-KwHw",
            "common_mistakes" => "Rounding the lower back under heavy load\nUsing too much weight and relying on momentum\nPulling with the arms instead of driving the elbows back\nNot maintaining a neutral spine throughout",
            "diamonds" => 5,
            "category_id" => 2,
        ]);

        DB::table("exercises")->insert([
            "name" => "Face Pull",
            "slug" => "face-pull",
            "icon_id" => 1,
            "image_url" => (asset("storage/exercises/Face-Pull.gif")),
            "video_url" => "https://www.youtube.com/embed/V8dZ3pyiCBo",
            "common_mistakes" => "Using too much weight and losing control\nPulling to the neck instead of the forehead\nNot rotating the wrists externally at the end\nAllowing the elbows to drop below shoulder height",
            "diamonds" => 3,
            "category_id" => 2,
        ]);

        DB::table("exercises")->insert([
            "name" => "Cable Row",
            "slug" => "cable-row",
            "icon_id" => 1,
            "image_url" => "",
            "video_url" => "https://www.youtube.com/embed/GZbfZ033f74",
            "common_mistakes" => "Rounding your back at the end of the pull\nUsing too much momentum by swinging the torso\nNot fully extending the arms on the way out\nPulling with the biceps rather than the back",
            "diamonds" => 4,
            "category_id" => 2,
        ]);

        DB::table("exercises")->insert([
            "name" => "Back Extension",
            "slug" => "back-extension",
            "icon_id" => 1,
            "image_url" => "",
            "video_url" => "https://www.youtube.com/embed/ph3pddpKzzw",
            "common_mistakes" => "Hyperextending the spine at the top of the movement\nRounding the back on the way down\nMoving too fast and using momentum\nPlacing the pad too high on the hips",
            "diamonds" => 3,
            "category_id" => 2,
        ]);

        DB::table("exercises")->insert([
            "name" => "Chest Supported Row",
            "slug" => "chest-supported-row",
            "icon_id" => 1,
            "image_url" => "",
            "video_url" => "https://www.youtube.com/embed/bnBzFaVCGaM",
            "common_mistakes" => "Raising your chest off the pad and using body English\nPulling with your biceps instead of your elbows\nNot squeezing the shoulder blades together at the top\nUsing too wide a grip and losing lat engagement",
            "diamonds" => 4,
            "category_id" => 2,
        ]);

        // ── LEGS ───────────────────────────────────────────────────────────────

        DB::table("exercises")->insert([
            "name" => "Romanian Deadlift",
            "slug" => "romanian-deadlift",
            "icon_id" => 1,
            "image_url" => "",
            "video_url" => "https://www.youtube.com/embed/7j-2w9JUjbY",
            "common_mistakes" => "Rounding the lower back instead of maintaining a neutral spine\nBending the knees too much turning it into a squat\nNot keeping the bar close to the body throughout\nLooking too far upward and straining the neck",
            "diamonds" => 5,
            "category_id" => 3,
        ]);

        DB::table("exercises")->insert([
            "name" => "Walking Lunges",
            "slug" => "walking-lunges",
            "icon_id" => 1,
            "image_url" => "",
            "video_url" => "https://www.youtube.com/embed/L8fvypPrzzs",
            "common_mistakes" => "Front knee caving inward during the lunge\nLeaning too far forward from the hips\nNot taking a large enough step\nAllowing the back knee to slam into the floor",
            "diamonds" => 4,
            "category_id" => 3,
        ]);

        DB::table("exercises")->insert([
            "name" => "Goblet Squat",
            "slug" => "goblet-squat",
            "icon_id" => 1,
            "image_url" => "",
            "video_url" => "https://www.youtube.com/embed/MxsFDhcyFyE",
            "common_mistakes" => "Heels rising off the ground due to poor ankle mobility\nKnees caving inward during the descent\nHolding the weight too far from the chest\nNot squatting to full depth",
            "diamonds" => 3,
            "category_id" => 3,
        ]);

        DB::table("exercises")->insert([
            "name" => "Standing Calf Raise",
            "slug" => "standing-calf-raise",
            "icon_id" => 1,
            "image_url" => "",
            "video_url" => "https://www.youtube.com/embed/gwLzBJYoWlI",
            "common_mistakes" => "Bouncing at the bottom and not getting a full stretch\nNot pausing and squeezing at the top of the movement\nRushing through reps with poor control\nUsing a limited range of motion",
            "diamonds" => 3,
            "category_id" => 3,
        ]);

        DB::table("exercises")->insert([
            "name" => "Sumo Deadlift",
            "slug" => "sumo-deadlift",
            "icon_id" => 1,
            "image_url" => "",
            "video_url" => "https://www.youtube.com/embed/OCFNjC_pBTU",
            "common_mistakes" => "Knees caving inward instead of tracking over the toes\nNot pushing the floor away with your legs\nRounding the lower back at the start of the pull\nBending the arms and turning the lift into a row",
            "diamonds" => 5,
            "category_id" => 3,
        ]);

        DB::table("exercises")->insert([
            "name" => "Cable Glute Kickback",
            "slug" => "cable-glute-kickback",
            "icon_id" => 1,
            "image_url" => "",
            "video_url" => "https://www.youtube.com/embed/2s-JmWl0GFM",
            "common_mistakes" => "Hyperextending and rotating the lower back\nUsing momentum to swing the leg up\nNot squeezing the glute at the top of the movement\nBending the support knee excessively for balance",
            "diamonds" => 3,
            "category_id" => 3,
        ]);

        // ── ARMS ───────────────────────────────────────────────────────────────

        DB::table("exercises")->insert([
            "name" => "Skull Crushers",
            "slug" => "skull-crushers",
            "icon_id" => 1,
            "image_url" => "",
            "video_url" => "https://www.youtube.com/embed/d_KZxkY_0cM",
            "common_mistakes" => "Flaring the elbows outward instead of keeping them vertical\nLowering the bar to the forehead instead of behind the head\nUsing too much weight and losing elbow position\nNot controlling the descent phase",
            "diamonds" => 4,
            "category_id" => 4,
        ]);

        DB::table("exercises")->insert([
            "name" => "Rope Pushdown",
            "slug" => "rope-pushdown",
            "icon_id" => 1,
            "image_url" => "",
            "video_url" => "https://www.youtube.com/embed/vB5OHsJ3EME",
            "common_mistakes" => "Not spreading the rope apart at the bottom of the rep\nLeaning too far forward and turning it into a press\nAllowing the elbows to drift away from the body\nUsing momentum by swinging the upper arms",
            "diamonds" => 3,
            "category_id" => 4,
        ]);

        DB::table("exercises")->insert([
            "name" => "Overhead Tricep Extension",
            "slug" => "overhead-tricep-extension",
            "icon_id" => 1,
            "image_url" => "",
            "video_url" => "https://www.youtube.com/embed/YbX7Wd8jQ-Q",
            "common_mistakes" => "Flaring the elbows outward during the movement\nArching the lower back excessively\nNot controlling the dumbbell on the way down\nUsing a weight too heavy to maintain proper form",
            "diamonds" => 4,
            "category_id" => 4,
        ]);

        DB::table("exercises")->insert([
            "name" => "Preacher Curl",
            "slug" => "preacher-curl",
            "icon_id" => 1,
            "image_url" => "",
            "video_url" => "https://www.youtube.com/embed/fIWP-FRFNU0",
            "common_mistakes" => "Using too much weight and shortening the range of motion\nNot fully extending the arm at the bottom\nSwinging the upper body to assist the curl\nLetting the arms lift off the pad at the top",
            "diamonds" => 4,
            "category_id" => 4,
        ]);

        DB::table("exercises")->insert([
            "name" => "Cable Bicep Curl",
            "slug" => "cable-bicep-curl",
            "icon_id" => 1,
            "image_url" => "",
            "video_url" => "https://www.youtube.com/embed/NFzTWp2qpiE",
            "common_mistakes" => "Allowing elbows to swing forward and backward\nUsing body momentum to initiate the curl\nNot squeezing the bicep at the top of the movement\nGripping the bar too tightly and engaging forearms",
            "diamonds" => 3,
            "category_id" => 4,
        ]);

        DB::table("exercises")->insert([
            "name" => "Concentration Curl",
            "slug" => "concentration-curl",
            "icon_id" => 1,
            "image_url" => "",
            "video_url" => "https://www.youtube.com/embed/Jvj2wV0vOYU",
            "common_mistakes" => "Moving the elbow off the inner thigh during the curl\nUsing a weight so heavy it requires body assistance\nNot supinating the wrist fully at the top\nRushing the eccentric and losing tension",
            "diamonds" => 4,
            "category_id" => 4,
        ]);

        // ── SHOULDERS ──────────────────────────────────────────────────────────

        DB::table("exercises")->insert([
            "name" => "Cable Lateral Raise",
            "slug" => "cable-lateral-raise",
            "icon_id" => 1,
            "image_url" => "",
            "video_url" => "https://www.youtube.com/embed/PPF5QTKT5Aw",
            "common_mistakes" => "Using too much weight and recruiting the traps\nLeaning to the side to gain momentum\nNot controlling the descent and letting the cable snap back\nRaising the arm too high above shoulder level",
            "diamonds" => 4,
            "category_id" => 5,
        ]);

        DB::table("exercises")->insert([
            "name" => "Dumbbell Shrug",
            "slug" => "dumbbell-shrug",
            "icon_id" => 1,
            "image_url" => "",
            "video_url" => "https://www.youtube.com/embed/cJRVVxmytaM",
            "common_mistakes" => "Rolling the shoulders in a circular motion instead of straight up\nUsing momentum by bending the knees\nNot pausing and squeezing the traps at the top\nHolding the dumbbells too far from the body",
            "diamonds" => 3,
            "category_id" => 5,
        ]);

        DB::table("exercises")->insert([
            "name" => "Barbell Shrug",
            "slug" => "barbell-shrug",
            "icon_id" => 1,
            "image_url" => "",
            "video_url" => "https://www.youtube.com/embed/sSr7auUb3s4",
            "common_mistakes" => "Rolling the shoulders forward or backward\nLeaning back and using the lower back\nNot holding the contraction at the top\nUsing an overly wide grip that limits range of motion",
            "diamonds" => 3,
            "category_id" => 5,
        ]);

        DB::table("exercises")->insert([
            "name" => "Cable Face Pull",
            "slug" => "cable-face-pull",
            "icon_id" => 1,
            "image_url" => "",
            "video_url" => "https://www.youtube.com/embed/rep-qVOkqgk",
            "common_mistakes" => "Pulling the rope to the neck instead of the forehead\nFlaring the elbows too high above shoulder level\nUsing too much weight and losing external rotation\nNot keeping the upper arms parallel to the floor",
            "diamonds" => 3,
            "category_id" => 5,
        ]);

        // ── CORE ───────────────────────────────────────────────────────────────

        DB::table("exercises")->insert([
            "name" => "Russian Twist",
            "slug" => "russian-twist",
            "icon_id" => 1,
            "image_url" => "",
            "video_url" => "https://www.youtube.com/embed/wkD8rjkodUI",
            "common_mistakes" => "Rounding the back instead of leaning with a straight spine\nTwisting only the arms and not rotating the torso\nMoving too quickly and losing control\nNot keeping the feet elevated to increase difficulty",
            "diamonds" => 3,
            "category_id" => 6,
        ]);

        DB::table("exercises")->insert([
            "name" => "Bicycle Crunch",
            "slug" => "bicycle-crunch",
            "icon_id" => 1,
            "image_url" => "",
            "video_url" => "https://www.youtube.com/embed/9FGilxCbdz8",
            "common_mistakes" => "Pulling on the neck with the hands\nRushing through the movement without full rotation\nNot fully extending the opposite leg\nLifting the lower back off the floor",
            "diamonds" => 3,
            "category_id" => 6,
        ]);

        DB::table("exercises")->insert([
            "name" => "Ab Wheel Rollout",
            "slug" => "ab-wheel-rollout",
            "icon_id" => 1,
            "image_url" => "",
            "video_url" => "https://www.youtube.com/embed/5cG-9bqnJMU",
            "common_mistakes" => "Letting the lower back sag when rolling out\nRolling too far out before building the necessary core strength\nNot engaging the lats and core throughout the movement\nHolding the breath instead of breathing steadily",
            "diamonds" => 5,
            "category_id" => 6,
        ]);

        DB::table("exercises")->insert([
            "name" => "Hanging Leg Raise",
            "slug" => "hanging-leg-raise",
            "icon_id" => 1,
            "image_url" => "",
            "video_url" => "https://www.youtube.com/embed/hdng3Nm1x_E",
            "common_mistakes" => "Swinging the body to use momentum instead of core strength\nNot controlling the legs on the way down\nBending the knees excessively to make it easier\nFailing to posteriorly tilt the pelvis",
            "diamonds" => 5,
            "category_id" => 6,
        ]);

        DB::table("exercises")->insert([
            "name" => "Mountain Climber",
            "slug" => "mountain-climber",
            "icon_id" => 1,
            "image_url" => "",
            "video_url" => "https://www.youtube.com/embed/nmwgirgXLYM",
            "common_mistakes" => "Raising the hips too high in a pike position\nNot fully engaging the core and allowing it to sag\nBouncing the upper body with each knee drive\nMoving so fast that form breaks down completely",
            "diamonds" => 3,
            "category_id" => 6,
        ]);

        DB::table("exercises")->insert([
            "name" => "Dead Bug",
            "slug" => "dead-bug",
            "icon_id" => 1,
            "image_url" => "",
            "video_url" => "https://www.youtube.com/embed/g_BYB0R-4Ws",
            "common_mistakes" => "Allowing the lower back to arch off the floor\nHolding the breath instead of exhaling on the extension\nMoving the opposite limbs too quickly and losing control\nNot pressing the lower back firmly into the floor",
            "diamonds" => 4,
            "category_id" => 6,
        ]);

        // ── FULL BODY ──────────────────────────────────────────────────────────

        DB::table("exercises")->insert([
            "name" => "Power Clean",
            "slug" => "power-clean",
            "icon_id" => 1,
            "image_url" => "",
            "video_url" => "https://www.youtube.com/embed/GG1WaDmE9xU",
            "common_mistakes" => "Bending the arms too early before full hip extension\nNot generating enough power from the legs and hips\nPulling the bar outward away from the body\nFailing to get under the bar quickly enough",
            "diamonds" => 5,
            "category_id" => 7,
        ]);

        DB::table("exercises")->insert([
            "name" => "Kettlebell Swing",
            "slug" => "kettlebell-swing",
            "icon_id" => 1,
            "image_url" => "",
            "video_url" => "https://www.youtube.com/embed/YSxHifyI6s8",
            "common_mistakes" => "Squatting instead of hinging at the hips\nRounding the lower back at the bottom of the swing\nUsing shoulder strength instead of hip drive\nNot fully extending the hips at the top",
            "diamonds" => 4,
            "category_id" => 7,
        ]);

        DB::table("exercises")->insert([
            "name" => "Turkish Get Up",
            "slug" => "turkish-get-up",
            "icon_id" => 1,
            "image_url" => "",
            "video_url" => "https://www.youtube.com/embed/0bWRPC49-KI",
            "common_mistakes" => "Rushing through the individual steps of the movement\nLosing eye contact with the weight at any point\nNot fully stabilising in each position before moving on\nUsing a weight that is too heavy for your current skill level",
            "diamonds" => 5,
            "category_id" => 7,
        ]);

        DB::table("exercises")->insert([
            "name" => "Thruster",
            "slug" => "thruster",
            "icon_id" => 1,
            "image_url" => "",
            "video_url" => "https://www.youtube.com/embed/L219ltL15zk",
            "common_mistakes" => "Not squatting to full depth before initiating the press\nPressing the bar before reaching full hip extension\nLosing the front rack position during the squat\nAllowing the lower back to round under fatigue",
            "diamonds" => 5,
            "category_id" => 7,
        ]);

        // ── CARDIO ─────────────────────────────────────────────────────────────

        DB::table("exercises")->insert([
            "name" => "Burpees",
            "slug" => "burpees",
            "icon_id" => 1,
            "image_url" => "",
            "video_url" => "https://www.youtube.com/embed/818EQLDjDxw",
            "common_mistakes" => "Sagging the hips during the plank portion\nNot performing a full squat before jumping\nLanding on straight legs and stressing the knees\nOmitting the jump at the top to save energy",
            "diamonds" => 4,
            "category_id" => 8,
        ]);

        DB::table("exercises")->insert([
            "name" => "Box Jump",
            "slug" => "box-jump",
            "icon_id" => 1,
            "image_url" => "",
            "video_url" => "https://www.youtube.com/embed/52r_Ul5k03g",
            "common_mistakes" => "Landing on the toes without absorbing impact through the whole foot\nNot using a powerful arm swing to add momentum\nStepping down carelessly instead of stepping or jumping down safely\nUsing a box that is too high before building proper strength",
            "diamonds" => 4,
            "category_id" => 8,
        ]);

        DB::table("exercises")->insert([
            "name" => "Jump Rope",
            "slug" => "jump-rope",
            "icon_id" => 1,
            "image_url" => "",
            "video_url" => "https://www.youtube.com/embed/FJmRQ5iTXKE",
            "common_mistakes" => "Jumping too high and wasting energy on each rotation\nDriving the rope with the full arm instead of the wrists\nLooking down at the feet instead of straight ahead\nLanding flat-footed and not staying on the balls of the feet",
            "diamonds" => 3,
            "category_id" => 8,
        ]);

        DB::table("exercises")->insert([
            "name" => "Battle Ropes",
            "slug" => "battle-ropes",
            "icon_id" => 1,
            "image_url" => "",
            "video_url" => "https://www.youtube.com/embed/AZeEL-y69vw",
            "common_mistakes" => "Using too much arm swing and not driving from the core\nStanding upright instead of maintaining an athletic stance\nNot keeping the core engaged throughout the exercise\nCreating slack in the rope by standing too far from the anchor",
            "diamonds" => 4,
            "category_id" => 8,
        ]);

        DB::table("exercises")->insert([
            "name" => "Jumping Jacks",
            "slug" => "jumping-jacks",
            "icon_id" => 1,
            "image_url" => "",
            "video_url" => "https://www.youtube.com/embed/iSSAk4XCsRA",
            "common_mistakes" => "Not fully extending the arms overhead on each rep\nLanding with stiff straight legs and not softening the knees\nFailing to engage the core throughout the movement\nMoving too fast and allowing form to deteriorate",
            "diamonds" => 2,
            "category_id" => 8,
        ]);

        DB::table("exercises")->insert([
            "name" => "Treadmill Sprint",
            "slug" => "treadmill-sprint",
            "icon_id" => 1,
            "image_url" => "",
            "video_url" => "https://www.youtube.com/embed/cMYnf2HfvVs",
            "common_mistakes" => "Holding the handrails and reducing the effectiveness of the workout\nLeaning too far back instead of maintaining a slight forward lean\nStarting at maximum speed without a proper warm-up\nNot pumping the arms in sync with the legs",
            "diamonds" => 3,
            "category_id" => 8,
        ]);
    }
}
