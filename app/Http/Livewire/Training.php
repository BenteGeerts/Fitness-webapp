<?php

namespace App\Http\Livewire;

use App\Models\TrainingProgram;
use Livewire\Component;

class Training extends Component
{
    public $showTraining = true;
    public $showHistory = false;

    public $programs = null;

    public function render()
    {
        $this->programs = TrainingProgram::all();
        return view('livewire.training');
    }

    public function showTraining()
    {
        $this->showTraining = true;
        $this->showHistory = false;
    }

    public function showHistory()
    {
        $this->showTraining = false;
        $this->showHistory = true;
    }

    public function getTotalDiamonds($program)
    {
        $diamonds = 0;
        foreach($program->exercises as $exercise)
        {
           $diamonds += $exercise->diamonds;
        }

        return $diamonds;
    }
}
