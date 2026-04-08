<section class="settings">
    <div class="row justify-content-center">
        <div class="col-md-12 col-lg-8">

            <div class="page__heading">
                <a class="no-underline" href="{{ route('home') }}">
                    <i class="icon-back page__heading-icon"></i>
                </a>
                <h1>Settings</h1>
            </div>

            {{-- Profile section --}}
            <div class="settings__section settings__section--first">
                <p class="settings__section-title">Profile</p>

                <div class="settings__file">
                    <span class="settings__file-label">Profile photo</span>
                    <label class="button button--secondary settings__file-button" for="profileImage">
                        Choose image
                    </label>
                    <input wire:model="profileImage"
                           wire:change.debounce.1500ms="updateProfileImage"
                           class="settings__file-input"
                           name="profileImage" id="profileImage" type="file"
                           accept="image/png, image/jpeg"
                           wire:loading.attr="disabled">
                    <div wire:loading class="lds-dual-ring settings__spinner"></div>
                </div>

                @error('profileImage')
                    <span class="error">{{ $message }}</span>
                @enderror
                @if (session()->has('file'))
                    <div class="error error--green">{{ session('file') }}</div>
                @endif

                <div class="form__field">
                    <label class="form__label">First name</label>
                    <input wire:model="firstName" class="form__input-field" type="text"
                           placeholder="First name">
                </div>

                <div class="form__field">
                    <label class="form__label">Last name</label>
                    <input wire:model="lastName" class="form__input-field" type="text"
                           placeholder="Last name">
                    @if (session()->has('name'))
                        <div class="error error--green error--top-space">{{ session('name') }}</div>
                    @endif
                </div>

                <div class="form__field">
                    <label class="form__label">Email address</label>
                    <input wire:model="email" class="form__input-field" type="email"
                           placeholder="Email address">
                    @if (session()->has('email'))
                        <div class="error error--green error--top-space">{{ session('email') }}</div>
                    @endif
                </div>
            </div>

            {{-- Password section --}}
            <div class="settings__section">
                <p class="settings__section-title">Change password</p>

                <div class="form__field">
                    <label class="form__label" for="current-password">Current password</label>
                    <div class="form__password">
                        <input wire:model="currentPassword" class="form__input-field"
                               id="current-password" name="password" type="password"
                               placeholder="Enter current password" data-password>
                        <i class="icon-visibility form__icon" data-toggle-visibility></i>
                    </div>
                </div>

                <div class="form__field">
                    <label class="form__label" for="new-password">New password</label>
                    <div class="form__password">
                        <input wire:model="newPassword" class="form__input-field"
                               id="new-password" name="password" type="password"
                               placeholder="Enter new password" data-password>
                        <i class="icon-visibility form__icon" data-toggle-visibility></i>
                    </div>
                    @error('password')
                        <span class="error">{{ $message }}</span>
                    @enderror
                </div>
            </div>

            {{-- Setup section --}}
            <div class="settings__section">
                <p class="settings__section-title">Fitness profile</p>
                <p class="settings__section-description">
                    Update your weight, height, age, goal and gym frequency.
                </p>
                <a href="{{ route('setup.edit') }}" class="button button--secondary">Edit fitness profile</a>
            </div>

            {{-- Danger zone --}}
            <div class="settings__section settings__section--danger">
                <p class="settings__section-title settings__section-title--danger">Danger zone</p>
                <p class="settings__section-description">
                    Permanently delete your account and all associated data. This cannot be undone.
                </p>
                <button wire:click="deleteAccount" class="button button--tertiary">Delete my account</button>
            </div>

            {{-- Save bar --}}
            <div class="settings__save">
                <a wire:click="save" class="button button--medium">Save changes</a>
            </div>

        </div>
    </div>

    @if($showModal)
        <div class="modal-backdrop" wire:click="cancel"></div>
        <div class="settings__modal">
            <i class="icon-delete settings__modal-icon"></i>
            <p class="settings__modal-text settings__modal-text--title">
                Delete your account?
            </p>
            <p class="settings__modal-text">
                All your data, workouts, diamonds and friends will be permanently removed.
            </p>
            <div class="settings__modal-buttons">
                <button wire:click="delete" class="button button--tertiary">Yes, delete</button>
                <button wire:click="cancel" class="button button--secondary">Cancel</button>
            </div>
        </div>
    @endif
</section>
