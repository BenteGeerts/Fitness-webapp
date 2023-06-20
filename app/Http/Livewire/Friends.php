<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\User;

class Friends extends Component
{
    public $searchTerm = null;
    public $searchResults = [];
    public $showResults = false;

    public $friendsLeaderboard;
    public $worldLeaderboard;
    public $amountToLoad = 8;
    public $friends;


    public function render()
    {
        $this->friends = auth()->user()->friends()
            ->limit($this->amountToLoad)
            ->get();
        return view('livewire.friends');
    }

    public function search()
    {
        if (strlen($this->searchTerm) >= 3) {
            $this->showResults = true;
            $this->searchResults = User::where('name', 'like', '%' . $this->searchTerm . '%')->where('id', '!=', auth()->id())->limit(5)->get();
            return true;
        }

        $this->showResults = false;
        return false;
    }

    public function loadMore()
    {
        $this->amountToLoad = $this->amountToLoad + 8;
    }
}
