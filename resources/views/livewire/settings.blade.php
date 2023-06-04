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
                <label class="button" for="profileImage">Choose image</label>
                <input wire:model="profileImage" wire:change.debounce="updateProfileImage" class="settings__file-input"
                       id="profileImage" type="file" accept="image/png, image/jpeg">
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

            <h3 class="h3 settings__title">Language</h3>

            <div>
                <button class="settings__language-button settings__language-button--selected" value="dutch">
                    <img src="/images/nederlands.png" alt="">
                    <span class="settings__language-text">Nederlands</span>
                </button>

                <button class="settings__language-button" value="english">
                    <img src="/images/english.png" alt="">
                    <span class="settings__language-text">English</span>
                </button>
            </div>

            <h3 class="h3 settings__title">Appearance</h3>

            <div class="settings__appearance">
                <button class="settings__appearance-button settings__appearance-button--selected">
                    <i class="icon-sun settings__appearance-icon"></i>
                    <span class="settings__appearance-text">Light mode</span>
                </button>

                <button class="settings__appearance-button">
                    <i class="icon-moon settings__appearance-icon"></i>
                    <span class="settings__appearance-text">Dark mode</span>
                </button>

                <button class="settings__appearance-button">
                    <i class="icon-auto settings__appearance-icon"></i>
                    <span class="settings__appearance-text">System preference</span>
                </button>
            </div>

            <h3 class="h3 settings__title">Notifications</h3>

            <div class="settings__notifications">
                <label class="settings__toggle">
                    <input class="settings__toggle-input" type="checkbox">
                    <span class="settings__toggle-slider"></span>
                </label>

                <p class="settings__notifications-text">I like to receive email warnings</p>
            </div>

            <div class="settings__notifications">
                <label class="settings__toggle">
                    <input class="settings__toggle-input" type="checkbox">
                    <span class="settings__toggle-slider"></span>
                </label>

                <p class="settings__notifications-text">I like to receive email push notifications</p>
            </div>

            <h3 class="h3 settings__title">Danger zone</h3>
            <div class="settings__danger">
                <button wire:click="deleteAccount" class="button button--tertiary">Delete account</button>
            </div>

            <div class="settings__save">
                <button wire:click="save" class="button">Save changes</button>
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
