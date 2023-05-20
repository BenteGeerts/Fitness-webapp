@extends('layouts.app')
@section('content')
    <section class="shop">
        <div class="row justify-content-center">
            <div class="col-md-12 col-lg-10">
                <div class="page__heading">
                    <h1>Shop</h1>
                    <img class="page__profile-img" src="/images/profileimg.png" alt="">
                </div>

                <h3 class="h3 shop__heading">Power-Ups</h3>


                <div class="row">
                    <div class="col-md-12 col-lg-6">
                        <div class="shop__item">
                            <div class="shop__item-wrapper">
                                <i class="icon-fire shop__item-icon shop__item-icon--orange"></i>
                            </div>

                            <div class="shop__item-text">
                                <p class="shop__item-title">Streak freeze</p>
                                <p class="shop__item-paragraph">Streak Freeze allows your streak to
                                    remain in place for one full day of inactivity.
                                </p>

                                <a class="shop__price-wrapper">
                                    <i class="icon-diamond shop__price-icon"></i>
                                    <span class="shop__price">9999</span>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12 col-lg-6">
                        <div class="shop__item shop__item--bottom">
                            <div class="shop__item-wrapper">
                                <i class="icon-diamond shop__item-icon shop__item-icon--red"></i>
                            </div>

                            <div class="shop__item-text">
                                <p class="shop__item-title">Double points</p>
                                <p class="shop__item-paragraph">Double points allows you to get
                                    double points for the next 24 hours.
                                </p>

                                <a class="shop__price-wrapper">
                                    <i class="icon-diamond shop__price-icon"></i>
                                    <span class="shop__price">9999</span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>


                <div class="shop__more">
                    <p>More coming soon...</p>
                </div>
            </div>
        </div>
    </section>
@endsection
