<?php

namespace App\Console\Commands;

use App\Models\Achievement;
use App\Models\Shop;
use App\Models\TrainingProgramsHistory;
use App\Models\User;
use Illuminate\Console\Command;
use Carbon\Carbon;

class CheckVisitsGoal extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'visits-goal:check';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        $weekAgo = Carbon::now()->subWeek()->toDateString();
        $users = User::where('created_at', '<', $weekAgo)
            ->orWhere('created_at', '>', Carbon::now())
            ->get();

        $streakTokens = Shop::whereBetween('created_at', [$weekAgo, now()])->where('powerup_id', 1)->count();

        if(isset($users) && count($users) > 0) {
            foreach ($users as $user) {

                $minimumVisitsGoal = $user->userData->min_visits;


                $visitsCount = TrainingProgramsHistory::where('user_id', $user->id)
                    ->whereBetween('created_at', [now()->subWeek(), now()])
                    ->count();

                if ($visitsCount + $streakTokens < $minimumVisitsGoal) {
                    $achievement = Achievement::where('user_id', $user->id)->first();
                    $achievement->streak_length = 0;
                    $achievement->update();
                }
            }
        }

        return Command::SUCCESS;
    }
}
