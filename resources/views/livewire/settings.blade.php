<section class="settings">
    <div class="row justify-content-center">
        <div class="col-md-12 col-lg-10">
            <div class="page__heading">
                <a class="no-underline" href="{{route('home')}}"><i class="icon-back page__heading-icon"></i></a>
                <h1>Settings</h1>
            </div>

            <h2 class="h3 settings__title">Profile</h2>

            <form class="settings__file" enctype="multipart/form-data">
                <span class="settings__file-label">Profile image</span>
                <label class="button" for="profileImage"><span>Choose image</span>
                </label>
                <input wire:model="profileImage" wire:change.debounce.1500ms="updateProfileImage"
                       class="settings__file-input"
                       name="profileImage" id="profileImage" type="file" accept="image/png, image/jpeg"
                       wire:loading.attr="disabled">
                <div wire:loading class="lds-dual-ring"></div>
            </form>
            @error('profileImage')
            <span class="error">{{ $message }}</span>
            @enderror

            @if (session()->has('file'))
                <div class="error error--green">
                    {{ session('file') }}
                </div>
            @endif

            <div class="form__field">
                <label class="form__label" for="">First name</label>
                <input wire:model="firstName" class="form__input-field" type="text"
                       placeholder="Update your first name">
            </div>

            <div class="form__field">
                <label class="form__label" for="">Last name</label>
                <input wire:model="lastName" class="form__input-field" type="text" placeholder="Update your last name">
                @if (session()->has('name'))
                    <div class="error error--green">
                        {{ session('name') }}
                    </div>
                @endif
            </div>

            <div class="form__field">
                <label class="form__label" for="">Email</label>
                <input wire:model="email" class="form__input-field" type="email"
                       placeholder="Update your email address">
                @if (session()->has('email'))
                    <div class="error error--green">
                        {{ session('email') }}
                    </div>
                @endif
            </div>

            <h3 class="h3 settings__title">Reset password</h3>

            <div class="form__field">
                <label class="form__label" for="password">Current password</label>
                <div class="form__password">
                    <input wire:model="currentPassword" class="form__input-field" name="password" type="password"
                           placeholder="Enter your current password" data-password>
                    <i class="icon-visibility form__icon" data-toggle-visibility></i>
                </div>
            </div>

            <div class="form__field">
                <label class="form__label" for="password">New password</label>
                <div class="form__password">
                    <input wire:model="newPassword" class="form__input-field" name="password" type="password"
                           placeholder="Enter your new password" data-password>
                    <i class="icon-visibility form__icon" data-toggle-visibility></i>
                </div>
                @error('password')
                <span class="error">{{ $message }}</span>
                @enderror
            </div>

            <h3 class="h3 settings__title">Setup</h3>
            <div class="settings__setup">
                <a href="{{route('setup.edit')}}" class="button">Edit setup values</a>
            </div>
            <h3 class="h3 settings__title">Danger zone</h3>
            <div class="settings__danger">
                <button wire:click="deleteAccount" class="button button--tertiary">Delete account</button>
            </div>

            <div class="settings__save">
                <a wire:click="save" class="button">Save changes</a>
            </div>
        </div>
    </div>


    @if($showModal)
        <div class="settings__modal">
            <div class="settings__modal-text">
                <span>Are you sure you want to delete your account?</span>
            </div>
            <div class="settings__modal-buttons">
                <button wire:click="delete" class="button button--tertiary">Yes</button>
                <button wire:click="cancel" class="button button--green">No</button>
            </div>
        </div>
    @endif
</section>
