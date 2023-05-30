<?php

namespace App\Http\Livewire;

use App\Models\User;
use Illuminate\Support\Facades\Storage;
use Livewire\Component;
use Livewire\WithFileUploads;

class Settings extends Component
{
    use WithFileUploads;

    public $profileImage;

    public function render()
    {
        return view('livewire.settings');
    }

    public function updateProfileImage()
    {
        $this->validate([
            'profileImage' => 'image|max:1024',
        ]);

        $fileName = time() . '.png';
        $filePath = 'public/images';

        Storage::putFileAs($filePath, $this->profileImage, $fileName);

        $url = Storage::url($filePath . '/' . $fileName);
        $user = User::find(auth()->id());
        $user->avatar = asset($url);
        $user->update();

        session()->flash('success', 'Profile image updated successfully.');
    }
}
