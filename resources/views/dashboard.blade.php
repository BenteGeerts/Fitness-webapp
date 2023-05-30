@extends('layouts.app')
@section('content')
    @foreach(session('stepCountData') as $index=>$stepCount)
        <span class="fit-data" data-step-date="{{$index}}">{{$stepCount['date']}}</span>
        <span class="fit-data" data-step-count="{{$index}}">{{$stepCount['stepCount']}}</span>
    @endforeach
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

                <div class="row">
                    <div class="dashboard__tile-row">
                        <div class="col-lg-3">
                            <div class="dashboard__tile-wrapper dashboard__tile-wrapper--orange">
                                <div class="dashboard__tile dashboard__tile--orange">
                                    <i class="icon-fire dashboard__tile-background dashboard__tile-background--orange"></i>
                                    <div class="dashboard__tile-content">
                                        <i class="icon-fire dashboard__tile-icon"></i>
                                        <p class="dashboard__tile-text">100 days</p>
                                    </div>
                                </div>

                                <div class="dashboard__tile-arrow dashboard__tile-arrow--orange">
                                    <i class="icon-arrow-right"></i>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-3">
                            <div class="dashboard__tile-wrapper dashboard__tile-wrapper--red">
                                <div class="dashboard__tile dashboard__tile--red">
                                    <i class="icon-diamond dashboard__tile-background dashboard__tile-background--red"></i>
                                    <div class="dashboard__tile-content">
                                        <i class="icon-diamond dashboard__tile-icon"></i>
                                        <p class="dashboard__tile-text">2680</p>
                                    </div>
                                </div>

                                <div class="dashboard__tile-arrow dashboard__tile-arrow--red">
                                    <i class="icon-arrow-right"></i>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-3">
                            <div class="dashboard__tile-wrapper dashboard__tile-wrapper--green">
                                <div class="dashboard__tile dashboard__tile--green">
                                    <i class="icon-ranking dashboard__tile-background dashboard__tile-background--green"></i>
                                    <div class="dashboard__tile-content">
                                        <i class="icon-ranking dashboard__tile-icon"></i>
                                        <p class="dashboard__tile-text">Ranking</p>
                                    </div>
                                </div>

                                <div class="dashboard__tile-arrow dashboard__tile-arrow--green">
                                    <i class="icon-arrow-right"></i>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>

                <div class="row">
                    <div class="dashboard__tile-row">
                        <div class="col-lg-3">
                            <div class="dashboard__tile-wrapper dashboard__tile-wrapper--light-blue">
                                <div class="dashboard__tile dashboard__tile--light-blue">
                                    <i class="icon-pets dashboard__tile-background dashboard__tile-background--light-blue"></i>
                                    <div class="dashboard__tile-content">
                                        <i class="icon-pets dashboard__tile-icon"></i>
                                        <p class="dashboard__tile-text">Lifted 50 raccoons</p>
                                    </div>
                                </div>
                                <div class="dashboard__tile-arrow dashboard__tile-arrow--light-blue">
                                    <i class="icon-arrow-right"></i>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-3">
                            <div class="dashboard__tile-wrapper dashboard__tile-wrapper--dark-blue">
                                <div class="dashboard__tile dashboard__tile--dark-blue">
                                    <i class="icon-weight dashboard__tile-background dashboard__tile-background--dark-blue"></i>
                                    <div class="dashboard__tile-content">
                                        <i class="icon-weight dashboard__tile-icon"></i>
                                        <p class="dashboard__tile-text">2000 kg</p>
                                    </div>
                                </div>
                                <div class="dashboard__tile-arrow dashboard__tile-arrow--dark-blue">
                                    <i class="icon-arrow-right"></i>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-3">
                            <div class="dashboard__tile-wrapper dashboard__tile-wrapper--pink">
                                <div class="dashboard__tile dashboard__tile--pink">
                                    <i class="icon-diamond dashboard__tile-background dashboard__tile-background--pink"></i>
                                    <div class="dashboard__tile-content">
                                        <i class="icon-diamond-plus dashboard__tile-icon"></i>
                                    </div>
                                </div>
                                <div class="dashboard__tile-arrow dashboard__tile-arrow--pink">
                                    <i class="icon-arrow-right"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="dashboard__steps-wrapper">
                    <i class="icon-steps dashboard__steps-icon"></i>
                    <p class="dashboard__steps-text" data-current-steps>1000 <br>steps</p>
                </div>

                <div class="row justify-content-between align-items-center">
                    <div class="col-md-12 col-lg-6">
                        <canvas class="dashboard__chart" id="step-chart"></canvas>
                    </div>

                    <div class="col-md-12 col-lg-3 p-lg-0">
                        <div class="dashboard__friends">
                            <p class="dashboard__friends-title">My friends</p>
                            <div class="dashboard__friends-images">
                                @foreach($friends as $friend)
                                    <img class="dashboard__friends-img" src="{{$friend->avatar}}" alt="">
                                @endforeach
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
                                        <img class="program__drawing" src="/images/drawing__running.svg" alt="">
                                    </div>

                                    <div class="program__text-container">
                                        <p class="program__title">{{$program->name}}</p>
                                        <div class="program__icons">
                                            <div class="program__icon-wrapper">
                                                <i class="icon-alarm program__icon"></i>
                                                <p class="program__icon-text">60 min</p>
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
