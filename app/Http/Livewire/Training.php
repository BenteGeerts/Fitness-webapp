<?php

namespace App\Http\Livewire;

use App\Models\TrainingProgram;
use Livewire\Component;

class Training extends Component
{
    public $showTraining = true;
    public $showHistory = false;

    public $recommendedPrograms = null;
    public $allPrograms = null;

    public function render()
    {
        $this->allPrograms = TrainingProgram::all();
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
}
