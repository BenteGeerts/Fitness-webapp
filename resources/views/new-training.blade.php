@extends('layouts.app')
@section('content')
    <section class="new-training">
        <div class="row justify-content-center">
            <div class="col-md-12 col-lg-10">
                <div class="page__heading">
                    <h1>Training</h1>
                    <img class="page__profile-img" src="/images/profileimg.png" alt="">
                </div>

                <h2 class="h3 new-training__title">Create a new program</h2>

                <div class="col-md-12 col-lg-4">
                    <div class="form__field">
                        <label class="form__label" for="">Program name</label>
                        <input class="form__input-field form__input-field--no-background" type="text">
                    </div>
                </div>

                <div class="new-training__diamonds">
                    <i class="icon-diamond new-training__diamonds-icon"></i>
                    <span class="new-training__diamonds-text">+5</span>
                </div>

               <div class="new-training__exercises">
                   <h3 class="new-training__exercises-title">Exercises</h3>
                   <span class="new-training__exercises-number">2</span>
               </div>

                <div class="row">
                    <div class="col-md-12 col-lg-4">
                        <div class="program">
                            <div class="program__drawing-container">
                                <img class="program__drawing" src="/images/drawing__running.svg" alt="">
                            </div>

                            <div class="program__text-container">
                                <p class="program__title">Running</p>
                                <div class="program__icons">
                                    <div class="program__icon-wrapper">
                                        <i class="icon-alarm program__icon"></i>
                                        <p class="program__icon-text">60 min</p>
                                    </div>
                                    <div class="program__icon-wrapper">
                                        <i class="icon-diamond program__icon"></i>
                                        <p class="program__icon-text">552</p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="program">
                            <div class="program__drawing-container">
                                <img class="program__drawing" src="/images/drawing__running.svg" alt="">
                            </div>

                            <div class="program__text-container">
                                <p class="program__title">Running</p>
                                <div class="program__icons">
                                    <div class="program__icon-wrapper">
                                        <i class="icon-alarm program__icon"></i>
                                        <p class="program__icon-text">60 min</p>
                                    </div>
                                    <div class="program__icon-wrapper">
                                        <i class="icon-diamond program__icon"></i>
                                        <p class="program__icon-text">552</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12 col-lg-4">
                        <div class="program">
                            <div class="program__drawing-container">
                                <img class="program__drawing" src="/images/drawing__running.svg" alt="">
                            </div>

                            <div class="program__text-container">
                                <p class="program__title">Running</p>
                                <div class="program__icons">
                                    <div class="program__icon-wrapper">
                                        <i class="icon-alarm program__icon"></i>
                                        <p class="program__icon-text">60 min</p>
                                    </div>
                                    <div class="program__icon-wrapper">
                                        <i class="icon-diamond program__icon"></i>
                                        <p class="program__icon-text">552</p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="program">
                            <div class="program__drawing-container">
                                <img class="program__drawing" src="/images/drawing__running.svg" alt="">
                            </div>

                            <div class="program__text-container">
                                <p class="program__title">Running</p>
                                <div class="program__icons">
                                    <div class="program__icon-wrapper">
                                        <i class="icon-alarm program__icon"></i>
                                        <p class="program__icon-text">60 min</p>
                                    </div>
                                    <div class="program__icon-wrapper">
                                        <i class="icon-diamond program__icon"></i>
                                        <p class="program__icon-text">552</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12 col-lg-4">
                        <div class="program">
                            <div class="program__drawing-container">
                                <img class="program__drawing" src="/images/drawing__running.svg" alt="">
                            </div>

                            <div class="program__text-container">
                                <p class="program__title">Running</p>
                                <div class="program__icons">
                                    <div class="program__icon-wrapper">
                                        <i class="icon-alarm program__icon"></i>
                                        <p class="program__icon-text">60 min</p>
                                    </div>
                                    <div class="program__icon-wrapper">
                                        <i class="icon-diamond program__icon"></i>
                                        <p class="program__icon-text">552</p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="program">
                            <div class="program__drawing-container">
                                <img class="program__drawing" src="/images/drawing__running.svg" alt="">
                            </div>

                            <div class="program__text-container">
                                <p class="program__title">Running</p>
                                <div class="program__icons">
                                    <div class="program__icon-wrapper">
                                        <i class="icon-alarm program__icon"></i>
                                        <p class="program__icon-text">60 min</p>
                                    </div>
                                    <div class="program__icon-wrapper">
                                        <i class="icon-diamond program__icon"></i>
                                        <p class="program__icon-text">552</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>


                <div class="new-training__buttons">
                    <a href="{{route('training.add')}}" class="button">Add more</a>
                    <a href="" class="button">Random</a>
                </div>

                <div class="new-training__buttons new-training__buttons--under">
                    <a href="" class="button button--medium">Save</a>
                    <a href="" class="button button--secondary button--medium">Cancel</a>
                </div>
            </div>
        </div>
    </section>
@endsection
