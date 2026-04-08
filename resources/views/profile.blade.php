@extends('layouts.app')
@section('content')
    <section class="profile">
        <div class="row justify-content-center">
            <div class="col-md-12 col-lg-10">

                <div class="page__heading page__heading--space">
                    <div class="page__heading">
                        <a class="no-underline" href="{{ route('home') }}">
                            <i class="icon-back page__heading-icon"></i>
                        </a>
                        <h1>Profile</h1>
                    </div>
                    <a class="page__heading-settings" href="{{ route('settings') }}" title="Settings">
                        <i class="icon-settings"></i>
                    </a>
                </div>

                {{-- Profile image + name --}}
                <livewire:profile-image avatar="{{ $user->avatar }}" name="{{ $user->name }}"
                                        friends="{{ count($user->friends) }}"/>

                {{-- Stats --}}
                <h2 class="h3 profile__title" style="margin-top: 28px; margin-bottom: 14px;">Statistics</h2>
                <div class="profile__statistics">

                    <div class="profile__statistics-tile">
                        <i class="icon-fire profile__statistics-icon profile__statistics-icon--fire"></i>
                        <div class="profile__statistics-text">
                            <span class="profile__statistics-value">{{ $streakLength }}</span>
                            <span class="profile__statistics-sub">day streak</span>
                        </div>
                    </div>

                    <div class="profile__statistics-tile">
                        <i class="icon-diamond profile__statistics-icon profile__statistics-icon--diamond"></i>
                        <div class="profile__statistics-text">
                            <span class="profile__statistics-value">{{ number_format($totalDiamonds) }}</span>
                            <span class="profile__statistics-sub">diamonds</span>
                        </div>
                    </div>

                    <div class="profile__statistics-tile">
                        <i class="icon-weight profile__statistics-icon profile__statistics-icon--weight"></i>
                        <div class="profile__statistics-text">
                            <span class="profile__statistics-value">{{ count($trainings) }}</span>
                            <span class="profile__statistics-sub">workouts</span>
                        </div>
                    </div>

                </div>

                {{-- Achievements --}}
                <h2 class="h3 profile__title" style="margin-top: 28px;">Achievements</h2>
                <h3 class="h3 profile__subtitle">Badges</h3>

                <livewire:profile-achievements currentDiamonds="{{ $totalDiamonds }}" :user="$user"
                                               streakLength="{{ $streakLength }}" :trainings="$trainings"/>

                {{-- Workout history --}}
                <h3 class="h3 profile__subtitle" style="margin-top: 24px;">History</h3>

                <div class="profile__history">
                    @forelse($trainings as $training)
                        <div class="profile__history-tile">
                            <div class="tile__icon">
                                <i class="icon-weight"></i>
                            </div>
                            <div class="tile__text-wrapper">
                                <p class="tile__title">+{{ $training->gained_diamonds }} diamonds</p>
                                <span class="tile__subtitle">Workout completed</span>
                                <span class="tile__footer">{{ $training->created_at->format('d M Y') }}</span>
                            </div>
                        </div>
                    @empty
                        <div style="padding: 32px 0; color: #52526A; text-align:center; width:100%;">
                            <i class="icon-training" style="font-size:2.5rem; display:block; margin-bottom:10px;"></i>
                            <p>No workouts yet — start your first session!</p>
                        </div>
                    @endforelse
                </div>

            </div>
        </div>
    </section>
@endsection
