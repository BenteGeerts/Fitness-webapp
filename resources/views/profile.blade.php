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
            <h3 class="h3 profile__subtitle">Badges</h3>

            <div class="profile__badges">
                <img class="profile__badge" src="/images/badgeOne.png" alt="">
                <img class="profile__badge" src="/images/badgeTwo.png" alt="">
                <img class="profile__badge" src="/images/badgeThree.png" alt="">
                <img class="profile__badge" src="/images/badgeThree.png" alt="">

                <div class="profile__badge profile__badge--locked">
                    <img src="/images/badgeFour.png" alt="">
                    <i class="icon-lock profile__badge-lock"></i>
                </div>

                <div class="profile__badge profile__badge--locked">
                    <img src="/images/badgeFour.png" alt="">
                    <i class="icon-lock profile__badge-lock"></i>
                </div>

                <div class="profile__badge profile__badge--locked">
                    <img src="/images/badgeFour.png" alt="">
                    <i class="icon-lock profile__badge-lock"></i>
                </div>
            </div>

            <h3 class="h3 profile__subtitle">Challenges</h3>

            <div class="profile__challenges">
                <div class="profile__challenge">
                    <img class="profile__challenge-badge" src="/images/badgeOne.png" alt="">
                    <p class="profile__challenge-title">Lorem ipsum</p>
                </div>

                <div class="profile__challenge">
                    <img class="profile__challenge-badge" src="/images/badgeOne.png" alt="">
                    <p class="profile__challenge-title">Lorem ipsum</p>
                </div>
            </div>

            <h3 class="h3 profile__subtitle">History</h3>

            <div class="profile__history">
                <div class="profile__history-tile">
                    <div class="tile__icon">
                        <i class="icon-weight"></i>
                    </div>
                    <div class="tile__text-wrapper">
                        <p class="tile__title">40 diamonds</p>
                        <span class="tile__subtitle">Workout</span>
                        <span class="tile__footer">Mar 25 2023</span>
                    </div>
                </div>

                <div class="profile__history-tile">
                    <div class="tile__icon">
                        <i class="icon-weight"></i>
                    </div>
                    <div class="tile__text-wrapper">
                        <p class="tile__title">40 diamonds</p>
                        <span class="tile__subtitle">Workout</span>
                        <span class="tile__footer">Mar 25 2023</span>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
