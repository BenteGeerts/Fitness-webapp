<?php

namespace App\Http\Livewire;

use App\Models\Achievement;
use App\Models\ExerciseHistory;
use App\Models\TrainingProgram;
use App\Models\TrainingProgramHasWeight;
use App\Models\TrainingProgramsHistory;
use App\Traits\DiamondTrait;
use Livewire\Component;
use App\Traits\StreakTrait;
use App\Traits\TrainingTrait;


class TrainingPlay extends Component
{
    use StreakTrait;
    use TrainingTrait;
    use DiamondTrait;

    public $slug;
    public $training;
    public $exercises;
    public $currentIndex = 0;

    public $existingSets = [];
    public $prs = [];

    public function mount()
    {
        $this->training = TrainingProgram::where("slug", $this->slug)->first();
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

    public function render()
    {
        if (count($this->exercises) > 0) {
            return view('livewire.training-play')->with('exercise', $this->exercises[$this->currentIndex]);
        } else {
            return view('livewire.training-play');
        }
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

    public function previousExercise()
    {
        if ($this->currentIndex > 0) {
            $this->currentIndex--;
        }
    }

    public function nextExercise()
    {
        if ($this->currentIndex != (count($this->exercises) - 1)) {
            $this->currentIndex++;
        }
    }

    public function addSet($exerciseId, $exerciseType = 'strength')
    {
        $set = match($exerciseType) {
            'cardio_time'     => ['reps' => null, 'seconds' => null],
            'cardio_distance' => ['distance' => null],
            default           => ['reps' => null, 'weight' => null],
        };
        $this->existingSets[$exerciseId][] = $set;
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
        $totalDiamonds = 0;
        $totalWeight = 0;
        $hasDoublePointsPowerUp = DiamondTrait::checkForDoublePointsPowerUp();
        $exerciseTypes = $this->exercises->pluck('exercise_type', 'id');

        foreach ($this->existingSets as $exerciseId => $exerciseSets) {
            $type = $exerciseTypes[$exerciseId] ?? 'strength';
            foreach ($exerciseSets as $index => $set) {
                if ($type === 'cardio_time') {
                    if (!isset($set['reps']) || !isset($set['seconds'])) continue;
                    $diamonds = TrainingTrait::calculateCardioTimeDiamonds($exerciseId, $set['reps'], $set['seconds'], $hasDoublePointsPowerUp);
                    $histories[] = [
                        'user_id'          => auth()->id(),
                        'exercise_id'      => $exerciseId,
                        'reps'             => $set['reps'],
                        'seconds'          => $set['seconds'],
                        'weight'           => null,
                        'gained_diamonds'  => $diamonds,
                        'created_at'       => now(),
                        'updated_at'       => now(),
                    ];
                    $totalDiamonds += $diamonds;
                } elseif ($type === 'cardio_distance') {
                    if (!isset($set['distance'])) continue;
                    $diamonds = TrainingTrait::calculateCardioDistanceDiamonds($exerciseId, $set['distance'], $hasDoublePointsPowerUp);
                    $histories[] = [
                        'user_id'          => auth()->id(),
                        'exercise_id'      => $exerciseId,
                        'distance'         => $set['distance'],
                        'reps'             => null,
                        'weight'           => null,
                        'gained_diamonds'  => $diamonds,
                        'created_at'       => now(),
                        'updated_at'       => now(),
                    ];
                    $totalDiamonds += $diamonds;
                } else {
                    if (!isset($set['reps']) || !isset($set['weight'])) continue;
                    $diamonds = TrainingTrait::calculateDiamonds($exerciseId, $set['reps'], $set['weight'], $hasDoublePointsPowerUp);
                    $histories[] = [
                        'user_id'          => auth()->id(),
                        'reps'             => $set['reps'],
                        'weight'           => $set['weight'],
                        'exercise_id'      => $exerciseId,
                        'gained_diamonds'  => $diamonds,
                        'created_at'       => now(),
                        'updated_at'       => now(),
                    ];
                    $totalDiamonds += $diamonds;
                    $totalWeight += $set['weight'] * $set['reps'];
                }
            }
        }

        if (!empty($histories)) {
            ExerciseHistory::insert($histories);

            $history = new TrainingProgramsHistory();
            $history->user_id = auth()->id();
            $history->training_program_id = $this->training->id;
            $history->gained_diamonds = $totalDiamonds;
            $history->save();


            $achievement = Achievement::where('user_id', auth()->id())->first();
            DiamondTrait::setDiamonds($achievement, $totalDiamonds);
            TrainingTrait::setLastTrainingWeight($achievement, $totalWeight);
            StreakTrait::checkStreak(auth()->id());

        }

        return redirect()->route("training")->with("success", "Training saved");
    }
}
