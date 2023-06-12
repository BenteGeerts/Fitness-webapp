@extends('layouts.app')
@section('content')
    <section class="profile">
        <div class="row justify-content-center">
            <div class="col-md-12 col-lg-10">
                <div class="page__heading page__heading--space">
                    <div class="page__heading">
                        <a class="no-underline" href="{{route('home')}}"><i
                                class="icon-back page__heading-icon"></i></a>
                        <h1>Profile</h1>
                    </div>
                    <a class="page__heading-settings" href="{{route('settings')}}"><i
                            class="icon-settings page__settings"></i></a>
                </div>

                <livewire:profile-image avatar="{{$user->avatar}}" name="{{$user->name}}"
                                        friends="{{count($user->friends)}}"/>

                <h2 class="h3">Statistics</h2>
                <div class="profile__statistics">
                    <div class="profile__statistics-tile">
                        <i class="icon-fire profile__statistics-icon"></i>

                        <div class="profile__statistics-text">
                            <b>{{$streakLength}}</b>
                            <span>day streak</span>
                        </div>
                    </div>
                    <div class="profile__statistics-tile">
                        <i class="icon-diamond profile__statistics-icon"></i>

                        <div class="profile__statistics-text">
                            <b>{{$totalDiamonds}}</b>
                            <span>diamonds</span>
                        </div>
                    </div>
                    <div class="profile__statistics-tile">
                        <i class="icon-weight profile__statistics-icon"></i>

                        <div class="profile__statistics-text">
                            <b>{{count($trainings)}}</b>
                            <span>trainings</span>
                        </div>
                    </div>
                </div>

                <h2 class="h3">Achievements</h2>
                <h3 class="h3 profile__subtitle">Badges</h3>

                <livewire:profile-achievements currentDiamonds="{{$totalDiamonds}}"/>

                <h3 class="h3 profile__subtitle">History</h3>

                <div class="profile__history">

                    @forelse($trainings as $training)
                        <div class="profile__history-tile">
                            <div class="tile__icon">
                                <i class="icon-weight"></i>
                            </div>
                            <div class="tile__text-wrapper">
                                <p class="tile__title">{{$training->gained_diamonds}} diamonds</p>
                                <span class="tile__subtitle">Workout</span>
                                <span class="tile__footer">{{$training->created_at->format('d M Y')}}</span>
                            </div>
                        </div>
                    @empty
                        <span>No training done yet!</span>
                    @endforelse

                </div>
            </div>
        </div>
    </section>
@endsection
