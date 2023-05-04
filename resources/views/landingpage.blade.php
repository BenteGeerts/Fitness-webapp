@extends('layouts.app')
@section('content')
    <section class="landingpage">
        <div class="row">
            <div class="col-md-12 col-xl-6">
                <div class="landingpage__hero">
                    <img class="landingpage__hero-img" src="/images/hero.png" alt="women wearing gym clothes">
                </div>
            </div>

            <div class="col-md-12 col-xl-6">
                <div class="landingpage__text-content">
                    <div class="landingpage__heading">
                        <h1 class="landingpage__heading-title">MOVE</h1>
                        <p class="landingpage__heading-slogan">Motivate Overcome Visualize Empower</p>
                    </div>

                    <a class="button button--big" href="">Sign Up with Email</a>

                    <div class="landingpage__buttons">
                        <a class="button button--secondary button--icon" href="{{Route("googleLogin")}}">Google</a>
                        <a class="button button--secondary button--icon" href="{{Route("facebookLogin")}}">Facebook</a>
                    </div>

                    <p>Already have an account? Sign in</p>
                </div>
            </div>
        </div>
    </section>
@endsection
