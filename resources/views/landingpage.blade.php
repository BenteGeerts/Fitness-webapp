@extends('layouts.app')
@section('content')
    <section class="landingpage">
        <div class="row align-items-center landingpage__row">
            <div class="col-md-12 col-lg-6">
                <div class="hero">
                    <img class="hero__img" src="/images/hero.png" alt="women wearing gym clothes">
                </div>
            </div>

            <div class="col-md-12 col-lg-5 mx-auto">
                <div class="landingpage__text-content">
                    <div class="landingpage__heading">
                        <h1 class="landingpage__heading-title">Train harder.<br><span>Track smarter.</span></h1>
                        <p class="landingpage__heading-slogan">Your personal fitness companion — log workouts, earn rewards, compete with friends.</p>
                    </div>

                    <a class="button button--big" href="{{ Route('signup') }}">Get started for free</a>

                    <div class="divider__line-wrapper">
                        <hr class="divider__line">
                        <p class="divider__line-text">or sign up with</p>
                        <hr class="divider__line">
                    </div>

                    <a class="button button--secondary button--icon button--big landingpage__social-btn" href="{{ Route('googleLogin') }}">
                        <img class="button__img" src="/images/googleIcon.png" alt="Google">
                        Continue with Google
                    </a>

                    <p class="landingpage__signin-text">
                        Already have an account?
                        <a class="landingpage__link" href="{{ Route('login') }}">Sign in</a>
                    </p>
                </div>
            </div>
        </div>
    </section>
@endsection
