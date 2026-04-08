<div>
    <div class="profile__wrapper">
        <div class="profile__img-wrapper">
            <img class="profile__img" src="{{ $avatar }}" alt="{{ $name }}'s profile photo">
            <div wire:loading class="lds-dual-ring profile__loading"></div>

            <label class="profile__img-label" for="profileImg" title="Change photo">
                <i class="icon-camera profile__img-edit"></i>
            </label>

            <input wire:model="profileImage"
                   wire:change.debounce.1500ms="updateProfileImage"
                   class="profile__img-input"
                   type="file" id="profileImg" name="profileImg"
                   accept="image/png, image/jpeg">
        </div>

        <div class="profile__name-wrapper">
            <p class="profile__name">{{ $name }}</p>
            <span class="profile__friend-count">
                <i class="icon-friends profile__friend-count-icon"></i>
                {{ $friends }} {{ $friends == 1 ? 'friend' : 'friends' }}
            </span>
        </div>
    </div>

    @error('profileImage')
        <span class="error">{{ $message }}</span>
    @enderror

    @if (session()->has('file'))
        <div class="error error--green">{{ session('file') }}</div>
    @endif
</div>
