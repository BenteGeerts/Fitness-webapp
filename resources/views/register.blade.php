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

                {{-- Mobile: stacked --}}
                <a class="button button--icon button--big button--secondary signup__button" href="{{ Route('googleLogin') }}">
                    <img class="button__img" src="/images/googleIcon.png" alt="Google">
                    Continue with Google
                </a>
                <a class="button button--icon button--big button--secondary signup__button signup__button--spaced" href="{{ Route('microsoftLogin') }}">
                    <img class="button__img" src="/images/microsoftIcon.png" alt="Microsoft">
                    Continue with Microsoft
                </a>

                {{-- Desktop: side by side --}}
                <div class="signup__buttons">
                    <a class="button button--secondary button--icon signup__button signup__button--hidden" href="{{ Route('googleLogin') }}">
                        <img class="button__img" src="/images/googleIcon.png" alt="Google">
                        Google
                    </a>
                    <a class="button button--secondary button--icon signup__button signup__button--hidden" href="{{ Route('microsoftLogin') }}">
                        <img class="button__img" src="/images/microsoftIcon.png" alt="Microsoft">
                        Microsoft
                    </a>
                </div>
            </div>
        </div>
    </section>
@endsection
