<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Nav extends Component
{
    public $showExtra = false;

    public function render()
    {
        return view('livewire.nav');
    }

    public function showExtra()
    {
        $this->showExtra = !$this->showExtra;
    }
}
