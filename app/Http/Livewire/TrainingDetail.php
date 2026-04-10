<?php

namespace App\Http\Livewire;

use App\Models\Exercise;
use App\Models\ExerciseHistory;
use App\Models\TrainingProgram;
use App\Models\TrainingProgramHasWeight;
use App\Models\TrainingProgramsHistory;
use Livewire\Component;

class TrainingDetail extends Component
{
    public $training;
    public $exercises;
    public $sets = [];
    public $existingSets = [];
    public $decoded;

    public $showModal = false;
    public $editingName = false;
    public $editName = '';
    public $prs = [];

    public function mount(TrainingProgram $training)
    {
        $this->training = $training;
        $this->exercises = $this->training->exercises;
        $this->loadExistingSets();
        $this->loadPRs();
    }

    public function loadPRs()
    {
        $exerciseTypes = $this->exercises->pluck('exercise_type', 'id');

        $this->prs = ExerciseHistory::where('user_id', auth()->id())
            ->whereIn('exercise_id', $this->exercises->pluck('id'))
            ->selectRaw('exercise_id, MAX(weight) as max_weight, MAX(seconds) as max_seconds, MAX(distance) as max_distance')
            ->groupBy('exercise_id')
            ->get()
            ->mapWithKeys(function ($row) use ($exerciseTypes) {
                $type = $exerciseTypes[$row->exercise_id] ?? 'strength';
                $value = match($type) {
                    'cardio_time'     => $row->max_seconds ? $row->max_seconds . 's' : null,
                    'cardio_distance' => $row->max_distance ? $row->max_distance . 'm' : null,
                    default           => $row->max_weight ? $row->max_weight . ' kg' : null,
                };
                return [$row->exercise_id => $value];
            })
            ->filter()
            ->toArray();
    }

    public function loadExistingSets()
    {
        $existingSets = TrainingProgramHasWeight::whereIn('exercise_id', $this->exercises->pluck('id'))->where('user_id', auth()->id())->get();
        $groupedSets = $existingSets->groupBy('exercise_id');

        foreach ($groupedSets as $exerciseId => $sets) {
            foreach ($sets as $index => $set) {
                $this->existingSets[$exerciseId][$index] = [
                    'id'       => $set->id,
                    'reps'     => $set->reps,
                    'weight'   => $set->weight,
                    'seconds'  => $set->seconds,
                    'distance' => $set->distance,
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

    public function addSet($exerciseId, $exerciseType = 'strength')
    {
        $set = match($exerciseType) {
            'cardio_time'     => ['reps' => null, 'seconds' => null],
            'cardio_distance' => ['distance' => null],
            default           => ['reps' => null, 'weight' => null],
        };
        $this->sets[$exerciseId][] = $set;
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
                $weight = new TrainingProgramHasWeight();
                $weight->user_id = auth()->id();
                $weight->exercise_id = $exerciseId;
                $weight->training_program_id = $this->training->id;

                if (isset($set['seconds'])) {
                    if (!isset($set['reps']) || !isset($set['seconds'])) continue;
                    $weight->reps = $set['reps'];
                    $weight->seconds = $set['seconds'];
                } elseif (isset($set['distance'])) {
                    if (!isset($set['distance'])) continue;
                    $weight->distance = $set['distance'];
                } else {
                    if (!isset($set['reps']) || !isset($set['weight'])) continue;
                    $weight->reps = $set['reps'];
                    $weight->weight = $set['weight'];
                }

                $weight->save();
            }
        }

        return redirect()->route('training');
    }

    public function startEditingName()
    {
        $this->editName = $this->training->name;
        $this->editingName = true;
    }

    public function saveName()
    {
        $this->training->name = trim($this->editName);
        $this->training->save();
        $this->editingName = false;
    }

    public function toggleModal()
    {
        $this->showModal = !$this->showModal;
        $this->emit('addBodyClass', ['no-scroll', 'overlay']);
    }

    public function delete()
    {
        $idArray = $this->exercises->pluck('id')->toArray();

        $this->training->exercises()->detach($idArray);

        TrainingProgramHasWeight::where('training_program_id', $this->training->id)->delete();
        TrainingProgramsHistory::where('training_program_id', $this->training->id)->delete();

        $this->training->delete();
        return redirect()->route('training');
    }
}
