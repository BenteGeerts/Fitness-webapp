<?php

namespace App\Http\Livewire;

use App\Models\ExerciseHistory;
use App\Models\TrainingProgram;
use App\Models\TrainingProgramHasWeight;
use App\Models\TrainingProgramsHistory;
use Livewire\Component;
use App\Traits\StreakTrait;


class TrainingPlay extends Component
{
    use StreakTrait;

    public $slug;
    public $training;
    public $exercises;
    public $currentIndex = 0;

    public $existingSets = [];


    public function mount()
    {
        $this->training = TrainingProgram::where("slug", $this->slug)->first();
        $this->exercises = $this->training->exercises;
        $this->loadExistingSets();
    }

    public function render()
    {
        return view('livewire.training-play')->with('exercise', $this->exercises[$this->currentIndex]);
    }

    public function loadExistingSets()
    {
        $existingSets = TrainingProgramHasWeight::whereIn('exercise_id', $this->exercises->pluck('id'))->where('user_id', auth()->id())->get();
        $groupedSets = $existingSets->groupBy('exercise_id');

        foreach ($groupedSets as $exerciseId => $sets) {
            foreach ($sets as $index => $set) {
                $this->existingSets[$exerciseId][$index] = [
                    'id' => $set->id,
                    'reps' => $set->reps,
                    'weight' => $set->weight,
                ];
            }
        }
    }

    public function previousExercise()
    {
        if($this->currentIndex > 0)
        {
            $this->currentIndex--;
        }
    }

    public function nextExercise()
    {
        if($this->currentIndex != (count($this->exercises) - 1 ))
        {
            $this->currentIndex++;
        }
    }

    public function addSet($exerciseId)
    {
        $this->existingSets[$exerciseId][] = ['weight' => null, 'reps' => null];
    }

    public function removeSet($exerciseId, $index)
    {
        if (isset($this->existingSets[$exerciseId][$index])) {
            unset($this->existingSets[$exerciseId][$index]);
            $this->existingSets[$exerciseId] = array_values($this->existingSets[$exerciseId]);
        }
    }

    public function save()
    {
        foreach ($this->existingSets as $exerciseId => $exerciseSets) {
            foreach ($exerciseSets as $index => $set) {
                if (isset($set['reps']) && isset($set['weight'])) {
                    $histories[] = [
                        'user_id' => auth()->id(),
                        'reps' => $set['reps'],
                        'weight' => $set['weight'],
                        'exercise_id' => $exerciseId,
                        'created_at' => now(),
                        'updated_at' => now(),
                    ];
                }
            }
        }

        if (!empty($histories)) {
            ExerciseHistory::insert($histories);


            $history = new TrainingProgramsHistory();
            $history->user_id = auth()->id();
            $history->training_program_id = $this->training->id;
            $history->save();

            StreakTrait::checkStreak(auth()->id());

        }

        return redirect()->route("training")->with("success", "Training saved");
    }
}
