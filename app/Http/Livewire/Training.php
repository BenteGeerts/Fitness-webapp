<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Training extends Component
{
    public $showTraining = true;
    public $showHistory = false;

    public function render()
    {
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
