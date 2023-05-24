<?php

namespace App\Http\Livewire;

use App\Models\Exercise;
use Illuminate\Database\Eloquent\Collection;
use Livewire\Component;

class NewTraining extends Component
{
    public $diamonds;
    public $exercises;


    public function mount($exercises)
    {
        $decodedString = html_entity_decode($exercises);
        $this->exercises = collect(json_decode($decodedString))->map(function ($item) {
            return (object) $item;
        });
    }

    public function render()
    {
        return view('livewire.new-training');
    }

    public function cancel()
    {
        session()->forget('selectedExercises');
        return redirect()->route('training');
    }
}
