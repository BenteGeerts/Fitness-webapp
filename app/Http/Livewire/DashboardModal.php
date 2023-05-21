<?php

namespace App\Http\Livewire;

use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class DashboardModal extends Component
{
    public bool $showModal = false;
    public $searchTerm;
    public $showError = false;
    public $showAvailable = false;
    public $user;

    public function mount($showModal)
    {
        $this->showModal = $showModal;
    }

    public function render()
    {
        return view('livewire.dashboard-modal');
    }

    public function changeUsername()
    {
        $this->validate([
            'searchTerm' => 'required',
        ]);

        $this->user = User::where('username', '=', $this->searchTerm)->first();

        if(!is_null($this->user))
        {
            $this->showAvailable = false;
            $this->showError = true;
        }
        if(is_null($this->user))
        {
            $this->showError = false;
            $this->showAvailable = true;
        }
    }

    public function save()
    {
        $this->validate([
            'searchTerm' => 'required',
        ]);

        if(is_null($this->user))
        {
            $user = Auth::user();
            $user->username = $this->searchTerm;
            $user->update();
            $this->showModal = false;
        }
    }
}
