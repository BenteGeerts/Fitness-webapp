@extends('layouts.app')
@section('content')
    @if(session('stepCountData') !== null)
        <div>
            @forelse(session('stepCountData') as $index=>$stepCount)
                <span class="fit-data" data-step-date="{{$index}}">{{$stepCount['date']}}</span>
                <span class="fit-data" data-step-count="{{$index}}">{{$stepCount['stepCount']}}</span>
                @endforeach
        </div>
    @endif
    <section class="dashboard">
        <div class="row justify-content-center">
            <div class="col-md-12 col-lg-10">
                <div class="page__heading">
                    <h1>Dashboard</h1>
                </div>

                <div class="dashboard__greeting">
                    <h2 class="dashboard__greeting-title">Hello {{auth()->user()->name}}</h2>
                    <p class="dashboard__greeting-subtitle">Ready to rock?</p>
                </div>

                <livewire:dashboard-tiles streakLength="{{$streakLength}}" diamonds="{{$diamonds}}"
                                          lastLiftedWeight="{{$lastLiftedWeight}}"
                                          animalComparison="{{$animalComparison}}"/>

                <div class="row justify-content-between align-items-center">
                    <div class="dashboard__tile-row dashboard__tile-row--mobile-column">
                        @if(session('stepCountData') !== null)
                            <div class="col-md-12 col-lg-6">
                                <div class="dashboard__chart-wrapper">
                                    <div class="dashboard__steps-wrapper">
                                        <i class="icon-steps dashboard__steps-icon"></i>
                                        <p class="dashboard__steps-text" data-current-steps>1000 <br>steps</p>
                                    </div>
                                    <canvas class="dashboard__chart" id="step-chart"></canvas>
                                </div>
                            </div>
                        @endif

                        <div class="col-md-12 col-lg-3 p-lg-0">
                            <div class="dashboard__friends">
                                <p class="dashboard__friends-title">My friends</p>
                                <div class="dashboard__friends-images">
                                    @forelse($friends as $friend)
                                        <img class="dashboard__friends-img" src="{{$friend->avatar}}"
                                             alt="users profile image">
                                    @empty
                                        <span>You don't have frieds yet!</span>
                                    @endforelse
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <h3 class="h3">Recommended programs</h3>
                @foreach ($programs as $key => $program)
                    @if ($key % 3 === 0)
                        <div class="row">
                            @endif
                            <div class="col-md-6 col-lg-4">
                                <div class="program">
                                    <div class="program__drawing-container">
                                        <img class="program__drawing" src="/images/drawing__workingout.svg" alt="drawing of a person workingout">
                                    </div>

                                    <div class="program__text-container">
                                        <a href="{{route('training.detail', ['slug' => $program->slug])}}"><p
                                                class="program__title">{{$program->name}}</p></a>
                                        <div class="program__icons">
                                            <div class="program__icon-wrapper">
                                                <i class="icon-indicator program__icon"></i>
                                                <p class="program__icon-text">{{$program->level->level}}</p>
                                            </div>
                                            <div class="program__icon-wrapper">
                                                <i class="icon-diamond program__icon"></i>
                                                <p class="program__icon-text">{{$program->total_diamonds}}</p>
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
    <livewire:dashboard-modal showModal="{{session('showModal')}}"/>
@endsection
