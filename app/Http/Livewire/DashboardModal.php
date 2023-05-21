<?php

namespace App\Http\Livewire;

use App\Models\User;
use Livewire\Component;

class DashboardModal extends Component
{
    public $showModal;
    public $searchTerm;
    public $showError = false;
    public $showAvailable = false;

    public function render()
    {
        return view('livewire.dashboard-modal');
    }

    public function changeUsername()
    {
        $username = User::where('username', '=', $this->searchTerm)->first();

        if(!is_null($username))
        {
            $this->showAvailable = false;
            $this->showError = true;
        }
        if(is_null($username))
        {
            $this->showError = false;
            $this->showAvailable = true;
        }
    }
}
