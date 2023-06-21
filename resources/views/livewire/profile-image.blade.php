<div>
    <div class="profile__wrapper">
        <div class="profile__img-wrapper">
            <img class="profile__img" src="{{$avatar}}" alt="users profile image">
            <div wire:loading class="lds-dual-ring profile__loading"></div>

            <label class="profile__img-label" for="profileImg">
                <i class="icon-camera profile__img-edit"></i>
            </label>

            <input wire:model="profileImage" wire:change.debounce.1500ms="updateProfileImage" class="profile__img-input"
                   type="file"
                   id="profileImg" name="profileImg" accept="image/png, image/jpeg">
        </div>


        <div class="profile__name-wrapper">
            <p class="profile__name">{{$name}}</p>
            <span class="profile__friends">{{$friends}} friends</span>
        </div>
    </div>

    @error('profileImage')
    <span class="error">{{ $message }}</span>
    @enderror

    @if (session()->has('file'))
        <div class="error error--green">
            {{ session('file') }}
        </div>
    @endif
</div>
