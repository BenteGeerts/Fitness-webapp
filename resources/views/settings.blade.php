@extends('layouts.app')
@section('content')
    <section class="settings">
        <div class="row justify-content-center">
            <div class="col-md-12 col-lg-10">
                <div class="page__heading">
                    <h1>Settings</h1>
                </div>

                <h2 class="h3 settings__title">Profile</h2>

                <div class="settings__file">
                    <span class="settings__file-label">Profile image</span>
                    <label class="button" for="fileupload">Choose image</label>
                    <input class="settings__file-input" id="fileupload" type="file"  accept="image/png, image/jpeg">
                </div>

                <div class="form__field">
                    <label class="form__label" for="">First name</label>
                    <input class="form__input-field" type="text" placeholder="Update your first name">
                </div>

                <div class="form__field">
                    <label class="form__label" for="">Last name</label>
                    <input class="form__input-field" type="text" placeholder="Update your last name">
                </div>

                <div class="form__field">
                    <label class="form__label" for="">Email</label>
                    <input class="form__input-field" type="email" placeholder="Update your email address">
                </div>

                <h3 class="h3 settings__title">Reset password</h3>

                <div class="form__field">
                    <label class="form__label" for="password">Current password</label>
                    <div class="form__password">
                        <input class="form__input-field" name="password" type="password" placeholder="Enter your current password">
                        <i class="icon-visibility form__icon"></i>
                    </div>
                </div>

                <div class="form__field">
                    <label class="form__label" for="password">New password</label>
                    <div class="form__password">
                        <input class="form__input-field" name="password" type="password" placeholder="Enter your new password">
                        <i class="icon-visibility form__icon"></i>
                    </div>
                </div>

                <h3 class="h3 settings__title">Language</h3>

                <div>
                    <button class="settings__language-button settings__language-button--selected" value="dutch">
                        <img src="/images/nederlands.png" alt="">
                        <span class="settings__language-text">Nederlands</span>
                    </button>

                    <button  class="settings__language-button" value="english">
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
                    <a href="" class="button button--tertiary">Delete account</a>
                </div>

                <div class="settings__save">
                    <a href="" class="button">Save changes</a>
                </div>
            </div>
        </div>
    </section>
@endsection
