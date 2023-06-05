<?php

namespace App\Http\Livewire;

use Illuminate\Support\Facades\Storage;
use Livewire\Component;
use Livewire\WithFileUploads;

class ProfileImage extends Component
{
    use WithFileUploads;

    public $profileImage;
    public $avatar;
    public $name;
    public $friends;

    public function render()
    {
        return view('livewire.profile-image');
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
        $user = auth()->user();
        $user->avatar = asset($url);
        $user->update();

        $this->avatar = asset($url);

        session()->flash('file', 'Profile image updated successfully.');
    }

}
