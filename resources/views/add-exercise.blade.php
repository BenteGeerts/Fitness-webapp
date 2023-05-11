@extends('layouts.app')
@section('content')
    <section class="add-exercise">
        <div class="row justify-content-center">
            <div class="col-md-12 col-lg-10">
                <div class="page__heading">
                    <h1>Training</h1>
                    <img class="page__profile-img" src="/images/profileimg.png" alt="">
                </div>

                <h2 class="h3 add-exercise__title">Create a new program</h2>

                <div class="row">
                    <div class="col-md-12 col-lg-4">
                        <div class="add-exercise__parts" data-exercise-toggle="shoulders">
                            <p class="add-exercise__parts-text">Shoulders</p>
                            <i class="icon-arrow-under add-exercise__parts-icon"></i>
                        </div>
                    </div>

                    <div class="col-md-12 col-lg-4">
                        <div class="add-exercise__parts" data-exercise-toggle="back">
                            <p class="add-exercise__parts-text">Back</p>
                            <i class="icon-arrow-under add-exercise__parts-icon"></i>
                        </div>
                    </div>

                    <div class="col-md-12 col-lg-4">
                        <div class="add-exercise__parts" data-exercise-toggle="chest">
                            <p class="add-exercise__parts-text">Chest</p>
                            <i class="icon-arrow-under add-exercise__parts-icon"></i>
                        </div>
                    </div>

                    <div class="col-md-12 col-lg-4">
                        <div class="add-exercise__parts" data-exercise-toggle="arms">
                            <p class="add-exercise__parts-text">Arms</p>
                            <i class="icon-arrow-under add-exercise__parts-icon"></i>
                        </div>
                        <div class="add-exercise__exercises" data-exercises="arms">
                            <div class="row">
                                <div class="col-12 col-md-6 col-lg-12">
                                    <div class="program" data-exercise>
                                        <div class="program__drawing-container">
                                            <img class="program__drawing" src="/images/drawing__running.svg" alt="">
                                        </div>

                                        <div class="program__text-container">
                                            <p class="program__title">Running</p>
                                            <div class="program__icons">
                                                <div class="program__icon-wrapper">
                                                    <i class="icon-diamond program__icon"></i>
                                                    <p class="program__icon-text">552</p>
                                                </div>
                                            </div>

                                        </div>

                                        <div class="program__checkmark-wrapper" data-checkmark>
                                            <i class="icon-checkmark program__checkmark"></i>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12 col-md-6 col-lg-12">
                                    <div class="program" data-exercise>
                                        <div class="program__drawing-container">
                                            <img class="program__drawing" src="/images/drawing__running.svg" alt="">
                                        </div>

                                        <div class="program__text-container">
                                            <p class="program__title">Running</p>
                                            <div class="program__icons">
                                                <div class="program__icon-wrapper">
                                                    <i class="icon-diamond program__icon"></i>
                                                    <p class="program__icon-text">552</p>
                                                </div>
                                            </div>

                                        </div>

                                        <div class="program__checkmark-wrapper" data-checkmark>
                                            <i class="icon-checkmark program__checkmark"></i>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12 col-md-6 col-lg-12">
                                    <div class="program" data-exercise>
                                        <div class="program__drawing-container">
                                            <img class="program__drawing" src="/images/drawing__running.svg" alt="">
                                        </div>

                                        <div class="program__text-container">
                                            <p class="program__title">Running</p>
                                            <div class="program__icons">
                                                <div class="program__icon-wrapper">
                                                    <i class="icon-diamond program__icon"></i>
                                                    <p class="program__icon-text">552</p>
                                                </div>
                                            </div>

                                        </div>

                                        <div class="program__checkmark-wrapper" data-checkmark>
                                            <i class="icon-checkmark program__checkmark"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-12 col-lg-4">
                        <div class="add-exercise__parts" data-exercise-toggle="core">
                            <p class="add-exercise__parts-text">Core</p>
                            <i class="icon-arrow-under add-exercise__parts-icon"></i>
                        </div>
                    </div>

                    <div class="col-md-12 col-lg-4">
                        <div class="add-exercise__parts" data-exercise-toggle="legs">
                            <p class="add-exercise__parts-text">Legs</p>
                            <i class="icon-arrow-under add-exercise__parts-icon"></i>
                        </div>
                    </div>

                    <div class="col-md-12 col-lg-4">
                        <div class="add-exercise__parts" data-exercise-toggle="full-body">
                            <p class="add-exercise__parts-text">Full body</p>
                            <i class="icon-arrow-under add-exercise__parts-icon"></i>
                        </div>

                        <div class="add-exercise__exercises" data-exercises="full-body">
                            <div class="row">
                                <div class="col-12 col-md-6 col-lg-12">
                                    <div class="program" data-exercise>
                                        <div class="program__drawing-container">
                                            <img class="program__drawing" src="/images/drawing__running.svg" alt="">
                                        </div>

                                        <div class="program__text-container">
                                            <p class="program__title">Running</p>
                                            <div class="program__icons">
                                                <div class="program__icon-wrapper">
                                                    <i class="icon-diamond program__icon"></i>
                                                    <p class="program__icon-text">552</p>
                                                </div>
                                            </div>

                                        </div>

                                        <div class="program__checkmark-wrapper" data-checkmark>
                                            <i class="icon-checkmark program__checkmark"></i>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12 col-md-6 col-lg-12">
                                    <div class="program" data-exercise>
                                        <div class="program__drawing-container">
                                            <img class="program__drawing" src="/images/drawing__running.svg" alt="">
                                        </div>

                                        <div class="program__text-container">
                                            <p class="program__title">Running</p>
                                            <div class="program__icons">
                                                <div class="program__icon-wrapper">
                                                    <i class="icon-diamond program__icon"></i>
                                                    <p class="program__icon-text">552</p>
                                                </div>
                                            </div>

                                        </div>

                                        <div class="program__checkmark-wrapper" data-checkmark>
                                            <i class="icon-checkmark program__checkmark"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-12 col-lg-4">
                        <div class="add-exercise__parts" data-exercise-toggle="cardio">
                            <p class="add-exercise__parts-text">Cardio</p>
                            <i class="icon-arrow-under add-exercise__parts-icon"></i>
                        </div>

                        <div class="add-exercise__exercises" data-exercises="cardio">
                            <div class="row">
                                <div class="col-12 col-md-6 col-lg-12">
                                    <div class="program" data-exercise>
                                        <div class="program__drawing-container">
                                            <img class="program__drawing" src="/images/drawing__running.svg" alt="">
                                        </div>

                                        <div class="program__text-container">
                                            <p class="program__title">Running</p>
                                            <div class="program__icons">
                                                <div class="program__icon-wrapper">
                                                    <i class="icon-diamond program__icon"></i>
                                                    <p class="program__icon-text">552</p>
                                                </div>
                                            </div>

                                        </div>

                                        <div class="program__checkmark-wrapper" data-checkmark>
                                            <i class="icon-checkmark program__checkmark"></i>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12 col-md-6 col-lg-12">
                                    <div class="program" data-exercise>
                                        <div class="program__drawing-container">
                                            <img class="program__drawing" src="/images/drawing__running.svg" alt="">
                                        </div>

                                        <div class="program__text-container">
                                            <p class="program__title">Running</p>
                                            <div class="program__icons">
                                                <div class="program__icon-wrapper">
                                                    <i class="icon-diamond program__icon"></i>
                                                    <p class="program__icon-text">552</p>
                                                </div>
                                            </div>

                                        </div>

                                        <div class="program__checkmark-wrapper" data-checkmark>
                                            <i class="icon-checkmark program__checkmark"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="add-exercise__button">
                    <a href="" class="button">Add exercises</a>
                </div>
            </div>
        </div>
    </section>
@endsection
