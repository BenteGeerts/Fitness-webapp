<?php

namespace App\Http\Livewire;

use App\Models\Achievement;
use App\Models\Friend;
use App\Models\TrainingProgramsHistory;
use Livewire\Component;

class ProfileAchievements extends Component
{
    public $modalOne = false;
    public $modalTwo = false;
    public $modalThree = false;
    public $modalFour = false;

    public $firstModalConditionChecked = false;
    public $secondModalConditionChecked = false;
    public $thirdModalConditionChecked = false;
    public $fourthModalConditionChecked = false;

    public $currentTrainings = 0;
    public $currentDiamonds = 0;
    public $currentFriends = 0;

    public function mount()
    {
        $this->getTrainings();
        $this->getFriends();
    }

    public function render()
    {
        $this->checkFirstTraining();
        $this->checkHundredTrainings();
        $this->checkDiamonds();
        $this->checkFriend();
        return view('livewire.profile-achievements');
    }

    public function toggleModals($modal)
    {
        $this->$modal = !$this->$modal;
        $this->emit('addBodyClass', ['no-scroll', 'overlay']);
    }

    public function checkFirstTraining()
    {
        $history = TrainingProgramsHistory::where('user_id', auth()->id())->first();

        if (isset($history)) {
            $this->firstModalConditionChecked = true;
        }
    }

    public function checkHundredTrainings()
    {
        $history = TrainingProgramsHistory::where('user_id', auth()->id())->get();

        if (isset($history) && count($history) >= 100) {
            $this->secondModalConditionChecked = true;
        }
    }

    public function getTrainings()
    {
        $history = TrainingProgramsHistory::where('user_id', auth()->id())->get();

        if (isset($history)) {
            $this->currentTrainings = count($history);
        }
    }

    public function checkDiamonds()
    {
        $achievement = Achievement::where('user_id', auth()->id())->first();

        if (isset($achievement) && $achievement->total_diamonds >= 10000) {
            $this->thirdModalConditionChecked = true;
        }
    }

    public function checkFriend()
    {
        $friends = Friend::where('user_id', auth()->id())->first();

        if (isset($friends) && count($friends) >= 1) {
            $this->fourthModalConditionChecked = true;
        }
    }

    public function getFriends()
    {
        $friends = Friend::where('user_id', auth()->id())->get();

        if (isset($friends)) {
            $this->currentFriends = count($friends);
        }
    }
}
