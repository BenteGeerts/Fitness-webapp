@extends('layouts.app')
@section('content')
    <section class="settings">
        <div class="row justify-content-center">
            <div class="col-md-12 col-lg-10">
                <div class="page__heading">
                    <h1>Settings</h1>
                    <img class="page__profile-img" src="/images/profileimg.png" alt="">
                </div>

                <div class="settings__nav">
                    <i class="icon-profile-black settings__nav-icon"></i>
                    <p class="settings__nav-text">Profile</p>
                </div>

                <div class="settings__nav">
                    <i class="icon-globe settings__nav-icon"></i>
                    <p class="settings__nav-text">Language</p>
                </div>

                <div class="settings__nav">
                    <i class="icon-moon settings__nav-icon"></i>
                    <p class="settings__nav-text">Appearance</p>
                </div>

                <div class="settings__nav">
                    <i class="icon-notifications settings__nav-icon"></i>
                    <p class="settings__nav-text">Notifications</p>
                </div>

                <div class="settings__nav">
                    <i class="icon-logout settings__nav-icon"></i>
                    <p class="settings__nav-text">Logout</p>
                </div>
            </div>
        </div>
    </section>
@endsection
