<?php

namespace App\Http\Livewire;

use App\Models\Exercise;
use App\Models\TrainingProgram;
use App\Models\TrainingProgramHasWeight;
use Livewire\Component;

class TrainingDetail extends Component
{
    public $slug;
    public $training;
    public $exercises;
    public $sets = [];
    public $existingSets = [];

    public function mount()
    {
        $this->training = TrainingProgram::where("slug", $this->slug)->first();
        $this->exercises = $this->training->exercises;
        $this->loadExistingSets();
    }

    public function loadExistingSets()
    {
        $existingSets = TrainingProgramHasWeight::whereIn('exercise_id', $this->exercises->pluck('id'))->get();
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

    public function render()
    {
        return view('livewire.training-detail');
    }

    public function removeSet($exerciseId, $index)
    {
        if (isset($this->existingSets[$exerciseId][$index])) {
            $set = $this->existingSets[$exerciseId][$index];

            if (isset($set['id'])) {
                TrainingProgramHasWeight::destroy($set['id']);
            }

            unset($this->existingSets[$exerciseId][$index]);
            $this->existingSets[$exerciseId] = array_values($this->existingSets[$exerciseId]);
        }

        if (isset($this->sets[$exerciseId][$index])) {
            unset($this->sets[$exerciseId][$index]);
            $this->sets[$exerciseId] = array_values($this->sets[$exerciseId]);
        }
    }

    public function addSet($exerciseId)
    {
        $this->sets[$exerciseId][] = ['weight' => null, 'reps' => null];
    }

    public function updateSets()
    {
        foreach ($this->existingSets as $exerciseId => $sets) {
            foreach ($sets as $index => $set) {
                $existingSet = TrainingProgramHasWeight::find($set['id']);

                if ($existingSet) {
                    $existingSet->reps = $set['reps'];
                    $existingSet->weight = $set['weight'];
                    $existingSet->update();
                }
            }
        }
    }

    public function save()
    {
        $this->updateSets();

        foreach ($this->sets as $exerciseId => $exerciseSets) {
            foreach ($exerciseSets as $index => $set) {
                if (isset($set['reps']) && isset($set['weight'])) {
                    $weight = new TrainingProgramHasWeight();
                    $weight->reps = $set['reps'];
                    $weight->weight = $set['weight'];
                    $weight->exercise_id = $exerciseId;
                    $weight->training_program_id = $this->training->id;
                    $weight->save();
                }
            }
        }

        return redirect()->route('training');
    }
}
