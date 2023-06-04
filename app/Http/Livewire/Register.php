<?php

namespace App\Http\Livewire;

use App\Models\User;
use Livewire\Component;

class Register extends Component
{
    public $searchTerm;
    public $email;
    public $showError = false;
    public $showEmailError = false;
    public $showAvailable = false;
    public $user;


    public function render()
    {
        return view('livewire.register');
    }

    public function checkUsername()
    {
        $this->validate([
            'searchTerm' => 'required',
        ]);

        $this->user = User::where('username', '=', $this->searchTerm)->first();

        if (!is_null($this->user)) {
            $this->showAvailable = false;
            $this->showError = true;
        }
        if (is_null($this->user)) {
            $this->showError = false;
            $this->showAvailable = true;
        }
    }

    public function checkEmail()
    {
        $this->validate([
            'email' => 'required|email',
        ]);

        $email = User::where('email', $this->email)->first();

        if (!is_null($email)) {
            $this->showEmailError = true;
        }
        if (is_null($email)) {
            $this->showEmailError = false;
        }
    }
}
