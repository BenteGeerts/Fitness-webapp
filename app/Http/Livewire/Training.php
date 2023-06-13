<?php

namespace App\Http\Livewire;

use App\Models\ExerciseHistory;
use App\Models\TrainingProgram;
use App\Models\UserData;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Livewire\Component;

class Training extends Component
{
    public $showTraining = true;
    public $showHistory = false;

    public $recommendedPrograms = null;
    public $allPrograms = null;

    public $dateInput;
    public $exercises;

    public $reps = 0;
    public $weight = 0;
    public $diamonds;

    public function mount()
    {
        $this->allPrograms = TrainingProgram::whereIn('level_id', [1, 2, 3])->orWhere('user_id', auth()->id())->with('level')->get();
        $userData = UserData::where('user_id', Auth::id())->first();
        $this->recommendedPrograms = TrainingProgram::where("level_id", "=", $userData->level_id)->orWhere([
            ['level_id', 4],
            ['user_id', auth()->id()]])->with('level')->get();
    }

    public function render()
    {
        return view('livewire.training');
    }

    public function hydrate()
    {
        $this->emit('datepicker');
    }

    public function showExercises()
    {
        if (isset($this->dateInput)) {
            $this->exercises = ExerciseHistory::whereDate('created_at', 'like', '%' . date($this->dateInput) . '%')
                ->where('user_id', '=', auth()->id())
                ->get();
            $this->exercises = $this->exercises->groupBy('exercise_id')->collect();
        }
    }

    public function showTraining()
    {
        $this->showTraining = true;
        $this->showHistory = false;
        $this->exercises = null;
    }

    public function showHistory()
    {
        $this->showTraining = false;
        $this->showHistory = true;
    }

    public function getReps()
    {
        $this->reps = 0;
        $exercises = $this->exercises;

        if (isset($exercises)) {
            foreach ($exercises as $exercise) {
               foreach($exercise as $set){
                   $this->reps += $set->reps;
               }
            }

            return $this->reps;
        }

        return '0';
    }

    public function getWeight()
    {
        $this->weight = 0;
        if (isset($this->exercises)) {
            foreach ($this->exercises as $exercise) {
              foreach($exercise as $set){
                  $this->weight += $set->weight * $set->reps;
              }
            }

            return $this->weight;
        }

        return '0';
    }

    public function getDiamonds()
    {
        $this->diamonds = 0;
        if (isset($this->exercises)) {
            foreach ($this->exercises as $exercise) {
               foreach($exercise as $set){
                   $this->diamonds += $set->gained_diamonds;
               }
            }

            return $this->diamonds;
        }

        return '0';
    }

    public function getTotalDiamonds($exerciseGroup)
    {
        $totalDiamonds = 0;

        if(isset($exerciseGroup)) {
            foreach($exerciseGroup as $exercise){
                $totalDiamonds += $exercise->gained_diamonds;
            }

            return $totalDiamonds;
        }

        return '0';
    }
}
