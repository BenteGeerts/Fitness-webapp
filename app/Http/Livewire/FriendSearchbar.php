<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\User;

class FriendSearchbar extends Component
{
    public $searchTerm = null;
    public $searchResults = [];
    public $showResults = false;

    public function render()
    {
        return view('livewire.friend-searchbar');
    }

    public function search()
    {
        if(strlen($this->searchTerm) >= 3)
        {
            $this->showResults = true;
            $this->searchResults = User::where('name', 'like', '%' . $this->searchTerm . '%')->get();
            return true;
        }

        $this->showResults = false;
        return false;
    }
}
