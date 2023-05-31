<?php

namespace App\Console\Commands;

use App\Models\Achievement;
use App\Models\TrainingProgramsHistory;
use App\Models\User;
use Illuminate\Console\Command;

class CheckVisitsGoal extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'check:visits-goal';

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
        $users = User::all();

        foreach ($users as $user) {

            $minimumVisitsGoal = $user->userData->min_visits;


            $visitsCount = TrainingProgramsHistory::where('user_id', $user->id)
                ->whereBetween('created_at', [now()->subWeek(), now()])
                ->count();


            if (!$visitsCount >= $minimumVisitsGoal) {
                $achievement = Achievement::where('user_id', $user->id)->first();
                $achievement->streak_length = 0;
                $achievement->update();
            }
        }

        return Command::SUCCESS;
    }
}
