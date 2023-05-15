@extends('layouts.app')
@section('content')
    <section class="landingpage">
        <div class="row align-items-center">
            <div class="col-md-12 col-lg-6">
                <div class="hero">
                    <img class="hero__img" src="/images/hero.png" alt="women wearing gym clothes">
                </div>
            </div>

            <div class="col-md-12 col-lg-4 mx-auto">
                <div class="landingpage__text-content">
                    <div class="landingpage__heading">
                        <h1 class="landingpage__heading-title">MOVE</h1>
                        <p class="landingpage__heading-slogan">Motivate Overcome Visualize Empower</p>
                    </div>

                    <a class="button button--big" href="{{Route("signup")}}">Sign Up with Email</a>

                    <div class="divider__line-wrapper">
                        <hr class="divider__line">
                        <p class="divider__line-text">Or</p>
                        <hr class="divider__line">
                    </div>

                    <div class="landingpage__buttons">
                        <a class="button button--secondary button--icon" href="{{Route("googleLogin")}}">
                            <img class="button__img" src="/images/googleIcon.png" alt="">
                            Google
                        </a>
                        <a class="button button--secondary button--icon" href="{{Route("microsoftLogin")}}">
                            <img class="button__img" src="/images/microsoftIcon.png" alt="">
                            Microsoft
                        </a>
                    </div>

                    <p>Already have an account? <a class="landingpage__link" href="{{Route("login")}}">Sign in</a></p>
                </div>
            </div>
        </div>
    </section>
@endsection
