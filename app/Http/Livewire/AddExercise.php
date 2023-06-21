<?php

namespace App\Http\Livewire;

use App\Models\Exercise;
use Illuminate\Support\Str;
use Livewire\Component;

class AddExercise extends Component
{
    public $exercisesByCategory;
    public $selectedExercises = [];

    public function mount()
    {
        if (session('selectedExercises')) {
            $this->selectedExercises = session('selectedExercises');
        }
    }

    public function render()
    {
        $this->exercisesByCategory = collect(Exercise::all()->groupBy('category_id'));

        return view('livewire.add-exercise');
    }

    public function addExercises()
    {
        if (session('selectedExercises')) {
            $this->selectedExercises = array_merge($this->selectedExercises, session('selectedExercises'));
        }
        session(['selectedExercises' => $this->selectedExercises]);
        return redirect()->route("training.new");
    }
}
