<?php

namespace App\Http\Livewire;

use Livewire\Component;

class DashboardTiles extends Component
{
    public $streakLength;
    public $diamonds;
    public $lastLiftedWeight;

    public $streakModal = false;
    public $diamondsModal = false;
    public $animalsModal = false;
    public $weightsModal = false;
    public $moreDiamonds = false;

    public function render()
    {
        return view('livewire.dashboard-tiles');
    }

    public function toggleStreakModal()
    {
        $this->streakModal = !$this->streakModal;
        $this->addBodyClass();
    }

    public function toggleDiamondsModal()
    {
        $this->diamondsModal = !$this->diamondsModal;
        $this->addBodyClass();
    }

    public function toggleAnimalsModal()
    {
        $this->animalsModal = !$this->animalsModal;
        $this->addBodyClass();
    }

    public function toggleWeightsModal()
    {
        $this->weightsModal = !$this->weightsModal;
        $this->addBodyClass();
    }

    public function toggleMoreDiamonds()
    {
        $this->moreDiamonds = !$this->moreDiamonds;
        $this->addBodyClass();
    }

    public function addBodyClass()
    {
        $this->emit('addBodyClass', ['no-scroll', 'overlay']);
    }
}
