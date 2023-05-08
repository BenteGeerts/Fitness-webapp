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
                                @for($i = 1; $i<= 200; $i++)
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
                                @for($i = 1; $i<= 200; $i++)
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
                        <h1 class="setup__heading-title">What's your weight?</h1>
                        <p class="setup__heading-subtitle">This is used to setup recommendations just for you.</p>
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
                        <h1 class="setup__heading-title">What's your weight?</h1>
                        <p class="setup__heading-subtitle">This is used to setup recommendations just for you.</p>
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
                        <h1 class="setup__heading-title">What's your weight?</h1>
                        <p class="setup__heading-subtitle">This is used to setup recommendations just for you.</p>
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
                        <h1 class="setup__heading-title">What's your weight?</h1>
                        <p class="setup__heading-subtitle">This is used to setup recommendations just for you.</p>
                    </div>

                    <p class="setup__footer">You can change this any time later</p>
                    <a class="button button--big" href="">Finish</a>
                </div>
            </div>

        </div>
    </section>
@endsection
