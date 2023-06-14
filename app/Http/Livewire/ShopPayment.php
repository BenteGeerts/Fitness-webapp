<?php

namespace App\Http\Livewire;

use Carbon\Carbon;
use Livewire\Component;
use App\Models\Shop;

class ShopPayment extends Component
{
    public $streakFreezeActive = false;
    public $doubleDiamondsActive = false;
    public $StreakShopItems;
    public $diamondsShopItems;
    public $showStreakModal = false;
    public $showDoubleDiamondsModal = false;

    public function mount()
    {
        $this->streakShopItems = Shop::where('user_id', auth()->id())->where('powerup_id', 1)->get();
        $this->diamondsShopItems = Shop::where('user_id', auth()->id())->where('powerup_id', 2)->get();

        foreach ($this->streakShopItems as $item) {
            if (Carbon::parse($item->created_at)->diffInHours(Carbon::now()) < 24) {
                $this->streakFreezeActive = true;
            } else {
                $this->streakFreezeActive = false;
            }
        }
        foreach ($this->diamondsShopItems as $item) {
            if (Carbon::parse($item->created_at)->diffInHours(Carbon::now()) < 24) {
                $this->doubleDiamondsActive = true;
            } else {
                $this->doubleDiamondsActive = false;
            }
        }

    }

    public function render()
    {
        return view('livewire.shop-payment');
    }

    public function showModal($modal)
    {
        $this->$modal = true;
        $this->emit('addBodyClass', ['no-scroll', 'overlay']);
    }

    public function hideModal($modal)
    {
        $this->$modal = false;
        $this->emit('addBodyClass', ['no-scroll', 'overlay']);
    }

    public function streakFreeze()
    {
        if (isset($this->streakShopItems) && count($this->streakShopItems) > 0) {
            foreach ($this->streakShopItems as $item) {
                if (Carbon::parse($item->created_at)->diffInHours(Carbon::now()) > 24) {
                    $newShop = new Shop();
                    $newShop->user_id = auth()->id();
                    $newShop->powerup_id = 1;
                    $newShop->save();

                    $this->hideModal('showStreakModal');
                    session()->flash('successPowerUpOne', 'Power-up successfully added!');
                }
            }
        }
        else {
            $newShop = new Shop();
            $newShop->user_id = auth()->id();
            $newShop->powerup_id = 1;
            $newShop->save();

            $this->hideModal('showStreakModal');
            session()->flash('successPowerUpOne', 'Power-up successfully added!');
        }
    }

    public function doublePoints()
    {
        if (isset($this->diamondsShopItems) && count($this->diamondsShopItems) > 0) {
            foreach ($this->diamondsShopItems as $item) {
                if (Carbon::parse($item->created_at)->diffInHours(Carbon::now()) > 24) {
                    $newShop = new Shop();
                    $newShop->user_id = auth()->id();
                    $newShop->powerup_id = 2;
                    $newShop->save();

                    $this->hideModal('showDoubleDiamondsModal');
                    session()->flash('successPowerUpTwo', 'Power-up successfully added!');
                }
            }
        }
        else {
            $newShop = new Shop();
            $newShop->user_id = auth()->id();
            $newShop->powerup_id = 2;
            $newShop->save();

            $this->hideModal('showDoubleDiamondsModal');
            session()->flash('successPowerUpTwo', 'Power-up successfully added!');
        }
    }
}
