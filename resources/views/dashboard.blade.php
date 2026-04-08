@extends('layouts.app')
@section('content')
    @if(session('stepCountData') !== null)
        <div>
            @forelse(session('stepCountData') as $index => $stepCount)
                <span class="fit-data" data-step-date="{{ $index }}">{{ $stepCount['date'] }}</span>
                <span class="fit-data" data-step-count="{{ $index }}">{{ $stepCount['stepCount'] }}</span>
            @endforeach
        </div>
    @endif

    <section class="dashboard">
        <div class="row justify-content-center">
            <div class="col-md-12 col-lg-10">

                {{-- Header --}}
                <div class="page__heading">
                    <h1>Dashboard</h1>
                </div>

                <div class="dashboard__greeting">
                    <h2 class="dashboard__greeting-title">Hey, {{ auth()->user()->name }} 👋</h2>
                    <p class="dashboard__greeting-subtitle">
                        @php
                            $hour = now()->hour;
                        @endphp
                        @if($hour < 12) Good morning — ready to crush it?
                        @elseif($hour < 17) Good afternoon — keep the momentum going.
                        @else Good evening — one more session before you rest.
                        @endif
                    </p>
                </div>

                {{-- Stat tiles --}}
                <livewire:dashboard-tiles streakLength="{{ $streakLength }}" diamonds="{{ $diamonds }}"
                                          lastLiftedWeight="{{ $lastLiftedWeight }}"
                                          animalComparison="{{ $animalComparison }}"/>

                {{-- Steps chart + Friends --}}
                <div class="row justify-content-between align-items-start">
                    <div class="dashboard__tile-row dashboard__tile-row--mobile-column dashboard__tile-row--full">
                        @if(session('stepCountData') !== null)
                            <div class="col-md-12 col-lg-6">
                                <div class="dashboard__chart-wrapper">
                                    <div class="dashboard__steps-wrapper">
                                        <i class="icon-steps dashboard__steps-icon"></i>
                                        <p class="dashboard__steps-text" data-current-steps>— steps today</p>
                                    </div>
                                    <canvas class="dashboard__chart" id="step-chart"></canvas>
                                </div>
                            </div>
                        @endif

                        <div class="col-md-12 col-lg-3 p-lg-0">
                            <div class="dashboard__friends">
                                <p class="dashboard__friends-title">
                                    <i class="icon-friends dashboard__friends-title-icon"></i>
                                    Friends
                                </p>
                                <div class="dashboard__friends-images">
                                    @forelse($friends as $friend)
                                        <img class="dashboard__friends-img" src="{{ $friend->avatar }}"
                                             alt="{{ $friend->name }}'s avatar">
                                    @empty
                                        <p class="dashboard__friends-empty">
                                            No friends yet —
                                            <a href="{{ route('friends') }}" class="dashboard__friends-empty-link">add some!</a>
                                        </p>
                                    @endforelse
                                </div>
                                @if(count($friends) > 0)
                                    <a href="{{ route('friends') }}" class="dashboard__friends-leaderboard-link">
                                        View leaderboard →
                                    </a>
                                @endif
                            </div>
                        </div>
                    </div>
                </div>

                {{-- Recommended programs --}}
                <h3 class="h3 dashboard__section-heading">Recommended programs</h3>
                @foreach ($programs as $key => $program)
                    @if ($key % 3 === 0)
                        <div class="row">
                    @endif
                        <div class="col-md-6 col-lg-4">
                            <div class="program">
                                <div class="program__drawing-container">
                                    <img class="program__drawing" src="/images/drawing__workingout.svg"
                                         alt="person working out">
                                </div>

                                <div class="program__text-container">
                                    <a href="{{ route('training.detail', ['slug' => $program->slug]) }}">
                                        <p class="program__title">{{ $program->name }}</p>
                                    </a>
                                    <div class="program__icons">
                                        <div class="program__icon-wrapper">
                                            <i class="icon-indicator program__icon"></i>
                                            <p class="program__icon-text">{{ $program->level->level }}</p>
                                        </div>
                                        <div class="program__icon-wrapper">
                                            <i class="icon-diamond program__icon program__icon--purple"></i>
                                            <p class="program__icon-text">{{ $program->total_diamonds }}</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @if (($key + 1) % 3 === 0 || $loop->last)
                        </div>
                    @endif
                @endforeach

            </div>
        </div>
    </section>

    <livewire:dashboard-modal showModal="{{ session('showModal') }}"/>
@endsection
