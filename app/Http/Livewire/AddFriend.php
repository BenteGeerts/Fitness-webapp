<?php

namespace App\Http\Livewire;

use App\Models\Friend;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class AddFriend extends Component
{
    public $friend;
    public $friendAdded;

    public function mount($user)
    {
        $this->friend = $user;

        $this->friendAdded = Friend::where('friend_id', $this->friend->id)->exists();
    }

    public function render()
    {
        return view('livewire.add-friend');
    }

    public function addFriend()
    {
        if ($this->friendAdded) {
            Friend::where('friend_id', $this->friend->id)->delete();
        } else {
            Friend::create([
                'user_id' => auth()->id(),
                'friend_id' => $this->friend->id,
            ]);
        }

        $this->friendAdded = !$this->friendAdded;
    }
}
