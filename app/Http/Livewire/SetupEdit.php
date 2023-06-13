<?php

namespace App\Http\Livewire;

use App\Models\Achievement;
use App\Models\User;
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

    public function decrement($variable)
    {
        $this->$variable--;
    }

    public function increment($variable)
    {
        $this->$variable++;
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
        $userData = UserData::where('user_id', auth()->id())->first();
        $userData->weight = $this->height;
        $userData->height = $this->weight;
        $userData->age = $this->age;
        $userData->min_visits = $this->visits;

        switch ($this->gender) {
            case "male":
                $userData->gender_id = 1;
                break;
            case "female":
                $userData->gender_id = 2;
                break;
            case "x":
                $userData->gender_id = 3;
                break;
            case "other":
                $userData->gender_id = 4;
                break;
            default:
                break;
        }

        switch ($this->goal) {
            case "lose weight":
                $userData->goal_id = 1;
                break;
            case "gain weight":
                $userData->goal_id = 2;
                break;
            case "gain muscle":
                $userData->goal_id = 3;
                break;
            default:
                break;
        }

        $userData->update();
        return redirect()->route('settings');
    }
}
