<?php

namespace App\Http\Livewire;

use Illuminate\Support\Facades\Auth;
use Livewire\Component;
use App\Models\UserData;

class Setup extends Component
{
    public $currentPage = 1;

    public $weight = 50;
    public $height = 100;
    public $age = 20;
    public $gender = [];
    public $goal  = [];
    public $visits = 3;

    public function render()
    {
        return view('livewire.setup');
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
        $userData->gender = $this->gender;
        $userData->min_visits = $this->visits;

        if($this->goal == "lose weight")
        {
            $userData->goal = 1;
        }

        if($this->goal == "gain weight")
        {
            $userData->goal = 2;
        }

        if($this->goal == "gain muscle")
        {
            $userData->goal = 3;
        }
        $userData->save();

        return redirect("/dashboard");
    }
}
