<?php

namespace App\Http\Livewire;

use App\Models\User;
use Illuminate\Support\Facades\Storage;
use Livewire\Component;
use Livewire\WithFileUploads;
use Illuminate\Support\Facades\Hash;

class Settings extends Component
{
    use WithFileUploads;

    public $user;
    public $profileImage;

    public $firstName;
    public $lastName;
    public $email;

    public $currentPassword;
    public $newPassword;

    public $showModal = false;

    public function mount()
    {
        $this->user = User::find(auth()->id());
        $split = explode(' ', $this->user->name, 2);
        $this->firstName = $split[0];
        $this->lastName = $split[1];

        $this->email = $this->user->email;
    }

    public function render()
    {
        return view('livewire.settings');
    }

    public function updateProfileImage()
    {
        $this->validate([
            'profileImage' => 'image|max:2048',
        ]);

        $fileName = time() . '.png';
        $filePath = 'public/images';

        Storage::putFileAs($filePath, $this->profileImage, $fileName);

        $url = Storage::url($filePath . '/' . $fileName);
        $user = $this->user;
        $user->avatar = asset($url);
        $user->update();

        session()->flash('file', 'Profile image updated successfully.');
    }

    public function deleteAccount()
    {
        $this->showModal = true;
        $this->emit('addBodyClass', ['no-scroll', 'overlay']);
    }

    public function delete()
    {
        $user = $this->user;
        $user->delete();
        return redirect()->route('landingpage');
    }

    public function cancel()
    {
        $this->showModal = false;
        $this->emit('addBodyClass', ['no-scroll', 'overlay']);
    }

    public function save()
    {
        if (!is_null($this->firstName) && !is_null($this->lastName)) {
            $user = $this->user;
            $user->name = $this->firstName . ' ' . $this->lastName;
            $user->update();
            session()->flash('name', 'Name updated successfully.');

        }

        if (!is_null($this->email)) {
            $user = $this->user;
            $user->email = $this->email;
            $user->update();
            session()->flash('email', 'Email updated successfully.');
        }

        if (!is_null($this->currentPassword) && !is_null($this->newPassword)) {
            $user = $this->user;
            if (Hash::check($this->currentPassword, $user->password)) {
                $user->password = $this->newPassword;
                $user->update();
            } else {
                $this->addError('password', 'Failed to update your password');
            }
        }
    }
}
