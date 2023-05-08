@extends('layouts.app')
@section('content')
    <section class="setup">
        <div data-show-page="1" class="setup-page setup-page--show">
            <div class="setup__nav">
                <i class="icon-back setup__back"></i>
                <p class="setup__nav-page">1 of 6</p>
            </div>

            <div class="row justify-content-center">
                <div class="col-md-12 col-lg-4">
                   <div class="setup__heading">
                       <h1 class="setup__heading-title">What's your weight?</h1>
                       <p class="setup__heading-subtitle">This is used to setup recommendations just for you.</p>
                   </div>

                   <div class="setup__swiper">
                       <div class="swiper-container" data-swiper-horizontal>
                           <div class="swiper-wrapper">
                               @for($i = 30; $i<= 200; $i++)
                                   <div class="swiper-slide">
                                       <span>{{$i}} kg</span>
                                   </div>
                               @endfor
                           </div>
                       </div>
                   </div>

                   <p class="setup__footer">You can change this any time later</p>
                   <a data-page="1" class="button button--big" href="">Continue</a>
                   </div>
            </div>
        </div>

        <div data-show-page="2" class="setup-page">
            <div class="setup__nav">
                <i data-page-back class="icon-back setup__back"></i>
                <p class="setup__nav-page">2 of 6</p>
            </div>

            <div class="row justify-content-center">
                <div class="col-md-12 col-lg-4">
                    <div class="setup__heading">
                        <h1 class="setup__heading-title">What's your height?</h1>
                        <p class="setup__heading-subtitle">This is used to setup recommendations just for you.</p>
                    </div>

                    <div class="setup__swiper setup__swiper--vertical">
                        <div class="swiper-container swiper-container--vertical" data-swiper-vertical>
                            <div class="swiper-wrapper">
                                @for($i = 100; $i<= 250; $i++)
                                    <div class="swiper-slide">
                                        <span class="setup__number">{{$i}} cm</span>
                                    </div>
                                @endfor
                            </div>
                        </div>
                    </div>

                    <p class="setup__footer">You can change this any time later</p>
                    <a data-page="2" class="button button--big" href="">Continue</a>
                </div>
            </div>
        </div>

        <div data-show-page="3" class="setup-page">
            <div class="setup__nav">
                <i data-page-back class="icon-back setup__back"></i>
                <p class="setup__nav-page">3 of 6</p>
            </div>

            <div class="row justify-content-center">
                <div class="col-md-12 col-lg-4">
                    <div class="setup__heading">
                        <h1 class="setup__heading-title">What's your age?</h1>
                        <p class="setup__heading-subtitle">This is used to setup recommendations just for you.</p>
                    </div>

                    <div class="setup__swiper setup__swiper--vertical">
                        <div class="swiper-container swiper-container--vertical" data-swiper-vertical>
                            <div class="swiper-wrapper">
                                @for($i = 10; $i<= 101; $i++)
                                    <div class="swiper-slide">
                                        <span class="setup__number">{{$i}}</span>
                                    </div>
                                @endfor
                            </div>
                        </div>
                    </div>

                    <p class="setup__footer">You can change this any time later</p>
                    <a data-page="3" class="button button--big" href="">Continue</a>
                </div>
            </div>
        </div>

        <div data-show-page="4" class="setup-page">
            <div class="setup__nav">
                <i data-page-back class="icon-back setup__back"></i>
                <p class="setup__nav-page">4 of 6</p>
            </div>

            <div class="row justify-content-center">
                <div class="col-md-12 col-lg-4">
                    <div class="setup__heading">
                        <h1 class="setup__heading-title">Select your gender</h1>
                        <p class="setup__heading-subtitle">This is used to setup recommendations just for you.</p>
                    </div>

                   <div class="setup__select-wrapper">
                       <div class="setup__select">
                           <div class="setup__select-item" data-gender-option>
                               <i class="icon-female setup__select-icon"></i>
                               <p class="setup__select-name">Female</p>
                           </div>
                           <div class="setup__select-item" data-gender-option>
                               <i class="icon-male setup__select-icon"></i>
                               <p class="setup__select-name">Male</p>
                           </div>
                       </div>

                       <div class="setup__select">
                           <div class="setup__select-item" data-gender-option>
                               <i class="icon-transgender setup__select-icon"></i>
                               <p class="setup__select-name">X</p>
                           </div>
                           <div class="setup__select-item" data-gender-option>
                               <i class="icon-other setup__select-icon"></i>
                               <p class="setup__select-name">Other</p>
                           </div>
                       </div>
                   </div>

                    <p class="setup__footer">You can change this any time later</p>
                    <a data-page="4" class="button button--big" href="">Continue</a>
                </div>
            </div>

        </div>

        <div data-show-page="5" class="setup-page">
            <div class="setup__nav">
                <i data-page-back class="icon-back setup__back"></i>
                <p class="setup__nav-page">5 of 6</p>
            </div>

            <div class="row justify-content-center">
                <div class="col-md-12 col-lg-4">
                    <div class="setup__heading">
                        <h1 class="setup__heading-title">Select your goal</h1>
                        <p class="setup__heading-subtitle">This is used to setup recommendations just for you.</p>
                    </div>

                    <div class="setup__goal-wrapper">
                        <div class="setup__goal-tile" data-goal-option>
                            <div class="setup__goal-heading">
                                <i class="icon-weight-loss setup__goal-icon"></i>
                                <p class="setup__goal-title">Lose weight</p>
                            </div>
                            <p>Check this box if your goal is to lose weight</p>
                        </div>

                        <div class="setup__goal-tile" data-goal-option>
                            <div class="setup__goal-heading">
                                <i class="icon-weight-gain setup__goal-icon"></i>
                                <p class="setup__goal-title">Gain weight</p>
                            </div>
                            <p>Check this box if your goal is to gain weight</p>
                        </div>

                        <div class="setup__goal-tile" data-goal-option>
                            <div class="setup__goal-heading">
                                <i class="icon-weight setup__goal-icon"></i>
                                <p class="setup__goal-title">Gain muscle</p>
                            </div>
                            <p>Check this box if your goal is to gain muscle</p>
                        </div>

                    </div>

                    <p class="setup__footer">You can change this any time later</p>
                    <a data-page="5" class="button button--big" href="">Continue</a>
                </div>
            </div>


        </div>

        <div data-show-page="6" class="setup-page">
            <div class="setup__nav">
                <i data-page-back class="icon-back setup__back"></i>
                <p class="setup__nav-page">6 of 6</p>
            </div>


            <div class="row justify-content-center">
                <div class="col-md-12 col-lg-4">
                    <div class="setup__heading">
                        <h1 class="setup__heading-title">What is your lowest amount of gym visits per week?</h1>
                        <p class="setup__heading-subtitle">This is used to setup recommendations just for you.</p>
                    </div>

                    <div class="setup__swiper setup__swiper--vertical setup__swiper--small">
                        <div class="swiper-container swiper-container--vertical" data-swiper-vertical>
                            <div class="swiper-wrapper">
                                @for($i = 1; $i<= 7; $i++)
                                    <div class="swiper-slide">
                                        <span class="setup__number">{{$i}}</span>
                                    </div>
                                @endfor
                            </div>
                        </div>
                    </div>

                    <p class="setup__footer">You can change this any time later</p>
                    <a class="button button--big" href="">Finish</a>
                </div>
            </div>

        </div>
    </section>
@endsection
