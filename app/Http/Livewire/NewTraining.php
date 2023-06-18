<?php

namespace App\Http\Livewire;

use App\Models\Exercise;
use App\Models\TrainingProgram;
use Illuminate\Database\Eloquent\Collection;
use Livewire\Component;

class NewTraining extends Component
{
    public $diamonds;
    public $exercises;
    public $decodedString;

    public $trainingName;


    public function mount($exercises)
    {
        $this->exercises = $exercises;
        if (session('trainingName')) {
            $this->trainingName = session('trainingName');
        }
    }

    public function render()
    {
        return view('livewire.new-training');
    }

    public function save()
    {
        $this->validate([
            'trainingName' => 'required',
        ]);

        if (isset($this->exercises) && count($this->exercises) > 0) {
            $training = new TrainingProgram();
            $training->name = $this->trainingName;
            $training->slug = strtolower(str_replace(' ', '', $this->trainingName));
            $training->level_id = 4;
            $training->total_diamonds = $this->diamonds;
            $training->user_id = auth()->id();
            $training->save();

            $idArray = $this->exercises->pluck('id')->toArray();

            $training->exercises()->attach($idArray);


            session()->forget('selectedExercises');
            session()->forget('trainingName');
            return redirect()->route("training");
        }
        else {
            $this->addError('noExercises', 'Oops, you did not pick any exercises!');
        }
    }

    public function cancel()
    {
        session()->forget('selectedExercises');
        session()->forget('trainingName');
        return redirect()->route('training');
    }

    public function setName()
    {
        session(['trainingName' => $this->trainingName]);
        return redirect()->route('training.add');
    }

}
