<?php

namespace App\Http\Livewire;

use App\Models\TrainingProgram;
use App\Models\UserData;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class Training extends Component
{
    public $showTraining = true;
    public $showHistory = false;

    public $recommendedPrograms = null;
    public $allPrograms = null;

    public function render()
    {
        $this->allPrograms = TrainingProgram::whereIn('level_id', [1, 2, 3])->orWhere('user_id', auth()->id())->get();
        $userData = UserData::where('user_id', Auth::id())->first();
        $this->recommendedPrograms = TrainingProgram::where("level_id", "=", $userData->level_id)->orWhere([
            ['level_id', 4],
            ['user_id', auth()->id()]])->get();
        return view('livewire.training');
    }

    public function hydrate()
    {
        $this->emit('datepicker');
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
