@extends('layouts.app')
@section('content')
    <section class="signup">
        <div class="row align-items-center login__row">
            <div class="col-md-12 col-lg-6">
                <div class="hero hero--hidden">
                    <img class="hero__img" src="/images/hero.png" alt="women wearing gym clothes">
                </div>
            </div>

            <div class="col-md-12 col-lg-4 mx-auto">
                <div class="signup__heading">
                    <h1 class="signup__heading-title">Create your account</h1>
                    <p class="signup__heading-subtitle">Start earning diamonds from day one</p>
                </div>

                <livewire:register/>

                <div class="divider__line-wrapper divider__line-wrapper--signup">
                    <hr class="divider__line">
                    <p class="divider__line-text">or sign up with</p>
                    <hr class="divider__line">
                </div>

                <a class="button button--icon button--big button--secondary" href="{{ Route('googleLogin') }}">
                    <img class="button__img" src="/images/googleIcon.png" alt="Google">
                    Continue with Google
                </a>
            </div>
        </div>
    </section>
@endsection
