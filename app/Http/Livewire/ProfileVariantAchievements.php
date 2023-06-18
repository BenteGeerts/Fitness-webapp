<?php

namespace App\Http\Livewire;

use App\Models\Achievement;
use App\Models\Friend;
use App\Models\TrainingProgramsHistory;
use Livewire\Component;

class ProfileVariantAchievements extends Component
{
    public $user;
    public $userId;

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

    public $friends;
    public $trainings;

    public function mount()
    {
        $this->userId = $this->user->id;
        $this->getTrainings();
        $this->getFriends();
        $this->friends = Friend::where('user_id', $this->userId)->get();
    }

    public function render()
    {
        $this->checkFirstTraining();
        $this->checkHundredTrainings();
        $this->checkDiamonds();
        $this->checkFriend();
        return view('livewire.profile-variant-achievements');
    }

    public function toggleModals($modal)
    {
        $this->$modal = !$this->$modal;
        $this->emit('addBodyClass', ['no-scroll', 'overlay']);
    }

    public function checkFirstTraining()
    {
        $history = TrainingProgramsHistory::where('user_id', $this->userId)->first();

        if (isset($history)) {
            $this->firstModalConditionChecked = true;
        }
    }

    public function checkHundredTrainings()
    {
        if (isset($this->trainings) && count($this->trainings) >= 100) {
            $this->secondModalConditionChecked = true;
        }
    }

    public function getTrainings()
    {
        if (isset($this->trainings)) {
            $this->currentTrainings = count($this->trainings);
        }
    }

    public function checkDiamonds()
    {
        $achievement = Achievement::where('user_id', $this->userId)->first();

        if (isset($achievement) && $achievement->total_diamonds >= 10000) {
            $this->thirdModalConditionChecked = true;
        }
    }

    public function checkFriend()
    {
        if (isset($this->friends) && count($this->friends) >= 1) {
            $this->fourthModalConditionChecked = true;
        }
    }

    public function getFriends()
    {
        if (isset($this->friends)) {
            $this->currentFriends = count($this->friends);
        }
    }
}
