@extends('layouts.app')
@section('content')
    <section class="profile">
        <div class="row justify-content-center">
            <div class="col-md-12 col-lg-10">
                <div class="page__heading">
                    <h1>Profile</h1>
                    <i class="icon-settings page__settings"></i>
                </div>

                <div class="profile__img-wrapper">
                    <img class="profile__img" src="/images/profileimg.png" alt="">

                    <label class="profile__img-label" for="profileimg">
                        <i class="icon-camera profile__img-edit"></i>
                    </label>

                    <input class="profile__img-input" type="file" id="profileimg">
                </div>
            </div>

            <div class="profile__name-wrapper">
                <p class="profile__name">Bente Geerts</p>
                <span class="profile__friends">0 friends</span>
            </div>

            <h2 class="h3">Statistics</h2>
            <div class="profile__statistics">
                <div class="profile__statistics-tile">
                    <i class="icon-fire profile__statistics-icon"></i>

                    <div class="profile__statistics-text">
                        <b>100</b>
                        <span>day streak</span>
                    </div>
                </div>
                <div class="profile__statistics-tile">
                    <i class="icon-diamond profile__statistics-icon"></i>

                    <div class="profile__statistics-text">
                        <b>2680</b>
                        <span>diamonds</span>
                    </div>
                </div>
                <div class="profile__statistics-tile">
                    <i class="icon-medal profile__statistics-icon"></i>

                    <div class="profile__statistics-text">
                        <b>1</b>
                        <span>Top 3 finishes</span>
                    </div>
                </div>
            </div>

            <h2 class="h3">Achievements</h2>
            <h3 class="h3">Badges</h3>

            <div class="profile__badges">

            </div>

            <h3 class="h3">Challenges</h3>

            <div class="profile__challenges">

            </div>

            <h3 class="h3">History</h3>

            <div class="profile__history">
                
            </div>
        </div>
    </section>
@endsection
