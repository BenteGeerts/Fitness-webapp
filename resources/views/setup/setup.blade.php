@extends('layouts.app')
@section('content')
    <section class="setup">
        <div class="setup-page setup-page--show" data-show-page="1">
            <div class="setup__nav">
                <i class="icon-back setup__back"></i>
                <p class="setup__nav-page" data-page-back>1 of 6</p>
            </div>

            <div class="row justify-content-center">
                <div class="col-md-12 col-lg-4">
                    <div class="setup__heading">
                        <h1 class="setup__heading-title">What's your weight?</h1>
                        <p class="setup__heading-subtitle">This is used to setup recommendations just for you.</p>
                    </div>

                    <div class="setup__swiper">
                        <div class="swiper-container" data-swiper-horizontal="1">
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
                    <a class="button button--big" data-page="1">Continue</a>
                </div>
            </div>
        </div>

        <div class="setup-page" data-show-page="2">
            <div class="setup__nav">
                <i class="icon-back setup__back"></i>
                <p class="setup__nav-page" data-page-back>2 of 6</p>
            </div>

            <div class="row justify-content-center">
                <div class="col-md-12 col-lg-4">
                    <div class="setup__heading">
                        <h1 class="setup__heading-title">What's your height?</h1>
                        <p class="setup__heading-subtitle">This is used to setup recommendations just for you.</p>
                    </div>

                    <div class="setup__swiper setup__swiper--vertical">
                        <div class="swiper-container swiper-container--vertical" data-swiper-vertical="1">
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
                    <a class="button button--big" data-page="2">Continue</a>
                </div>
            </div>
        </div>

        <div class="setup-page" data-show-page="3">
            <div class="setup__nav">
                <i class="icon-back setup__back"></i>
                <p class="setup__nav-page">3 of 6</p>
            </div>

            <div class="row justify-content-center">
                <div class="col-md-12 col-lg-4">
                    <div class="setup__heading">
                        <h1 class="setup__heading-title">What's your age?</h1>
                        <p class="setup__heading-subtitle">This is used to setup recommendations just for you.</p>
                    </div>

                    <div class="setup__swiper setup__swiper--vertical">
                        <div class="swiper-container swiper-container--vertical" data-swiper-vertical="2">
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
                    <a class="button button--big" data-page="3">Continue</a>
                </div>
            </div>
        </div>

        <div class="setup-page" data-show-page="4">
            <div class="setup__nav">
                <i class="icon-back setup__back" data-page-back></i>
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
                            <div class="select__item">
                                <input class="select__item-input" type="checkbox" name="gender" value="female" id="female">
                                <label class="select__item-label" for="female">
                                    <div class="select__item-icon">
                                        <i class="icon-female"></i>
                                    </div>
                                    <div class="select__item-title">
                                        Female
                                    </div>
                                </label>
                            </div>


                            <div class="select__item">
                                <input class="select__item-input" type="checkbox" name="gender" value="male" id="male">
                                <label class="select__item-label" for="male">
                                    <div class="select__item-icon">
                                        <i class="icon-male"></i>
                                    </div>
                                    <div class="select__item-title">
                                        Male
                                    </div>
                                </label>
                            </div>
                        </div>

                        <div class="setup__select">
                            <div class="select__item">
                                <input class="select__item-input" type="checkbox" name="gender" value="x" id="x">
                                <label class="select__item-label" for="x">
                                    <div class="select__item-icon">
                                        <i class="icon-transgender"></i>
                                    </div>
                                    <div class="select__item-title">
                                        X
                                    </div>
                                </label>
                            </div>


                            <div class="select__item">
                                <input class="select__item-input" type="checkbox" name="gender" value="other" id="other">
                                <label class="select__item-label" for="other">
                                    <div class="select__item-icon">
                                        <i class="icon-other"></i>
                                    </div>
                                    <div class="select__item-title">
                                        Other
                                    </div>
                                </label>
                            </div>
                        </div>
                    </div>

                    <p class="setup__footer">You can change this any time later</p>
                    <a class="button button--big" data-page="4">Continue</a>
                </div>
            </div>

        </div>


        <div class="setup-page" data-show-page="5">
            <div class="setup__nav">
                <i class="icon-back setup__back" data-page-back></i>
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
                    <a class="button button--big" data-page="5">Continue</a>
                </div>
            </div>
        </div>

        <div class="setup-page" data-show-page="6">
            <div class="setup__nav">
                <i class="icon-back setup__back" data-page-back></i>
                <p class="setup__nav-page">6 of 6</p>
            </div>


            <div class="row justify-content-center">
                <div class="col-md-12 col-lg-4">
                    <div class="setup__heading">
                        <h1 class="setup__heading-title">What is your lowest amount of gym visits per week?</h1>
                        <p class="setup__heading-subtitle">This is used to setup recommendations just for you.</p>
                    </div>

                    <div class="setup__swiper setup__swiper--vertical setup__swiper--small">
                        <div class="swiper-container swiper-container--vertical" data-swiper-vertical="3">
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
                    <a class="button button--big" data-setup-submit>Finish</a>
                </div>
            </div>

        </div>
    </section>


@endsection
