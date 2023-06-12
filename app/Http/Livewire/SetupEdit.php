<?php

namespace App\Http\Livewire;

use App\Models\Achievement;
use App\Models\UserData;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class SetupEdit extends Component
{
    public $currentPage = 1;

    public $weight;
    public $height;
    public $age;
    public $gender = [];
    public $goal = [];
    public $visits;

    public function mount()
    {
        $this->gender = strtolower($this->gender);
        $this->goal = strtolower($this->goal);
    }

    public function render()
    {
        return view('livewire.setup-edit');
    }

    public function hydrate()
    {
        $this->emit('inputfield');
    }

    public function previous()
    {
        if ($this->currentPage == 1) {
            $this->currentPage = 1;
        } else {
            $this->currentPage--;
        }
    }

    public function next()
    {
        if ($this->currentPage == 4) {
            $this->validate([
                'gender' => 'required',
            ]);
        }

        if ($this->currentPage == 5) {
            $this->validate([
                'goal' => 'required',
            ]);
        }
        $this->currentPage++;
    }

    public function finish()
    {
        $userData = new UserData();
        $userData->user_id = Auth::id();
        $userData->weight = $this->weight;
        $userData->height = $this->height;
        $userData->age = $this->age;
        $userData->min_visits = $this->visits;

        switch ($this->gender) {
            case "male":
                $userData->gender = 1;
                break;
            case "female":
                $userData->gender = 2;
                break;
            case "x":
                $userData->gender = 3;
                break;
            case "other":
                $userData->gender = 4;
                break;
            default:
                break;
        }

        switch ($this->goal) {
            case "lose weight":
                $userData->goal = 1;
                break;
            case "gain weight":
                $userData->goal = 2;
                break;
            case "gain muscle":
                $userData->goal = 3;
                break;
            default:
                break;
        }
    }
}
