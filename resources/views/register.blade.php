@extends('layouts.app')
@section('content')
    <section class="signup">
        <div class="row align-items-center">
            <div class="col-md-12 col-lg-6">
                <div class="hero hero--hidden">
                    <img class="hero__img" src="/images/hero.png" alt="women wearing gym clothes">
                </div>
            </div>

            <div class="col-md-12 col-lg-4 mx-auto">
                <div class="signup__heading">
                    <h1 class="signup__heading-title">Welcome</h1>
                    <p class="signup__heading-subtitle">Create your account</p>
                </div>

                <form class="form" method="post" action="{{Route("register")}}">
                    @csrf
                    <div class="form__names">
                        <div class="form__field form__field--small">
                            <label class="form__label" for="firstname">First name</label>
                            <input class="form__input-field" name="firstname" id="firstname" type="text"
                                   value="{{ old('firstname') }}">
                        </div>

                        <div class="form__field form__field--small">
                            <label class="form__label" for="lastname">Last name</label>
                            <input class="form__input-field" name="lastname" id="lastname" type="text"
                                   value="{{ old('lastname') }}">
                        </div>
                    </div>

                    <div class="form__field">
                        <label class="form__label" for="username">Username</label>
                        <input class="form__input-field" name="username" id="username" type="text"
                               value="{{ old('username') }}">
                    </div>

                    <div class="form__field">
                        <label class="form__label" for="email">Email</label>
                        <input class="form__input-field" name="email" id="email" type="email"
                               value="{{ old('email') }}">
                    </div>

                    <div class="form__field">
                        <label class="form__label" for="password">Password</label>
                        <div class="form__password">
                            <input class="form__input-field" name="password" id="password" type="password" data-password
                                   value="{{ old('password') }}">
                            <i class="icon-visibility form__icon" data-toggle-visibility></i>
                        </div>
                    </div>

                    @error('*')
                    <div class="error">{{ $message }}</div>
                    @enderror

                    <button class="button button--big signup__cta" type="submit">Create your account</button>
                </form>

                <div class="divider__line-wrapper divider__line-wrapper--signup">
                    <hr class="divider__line">
                    <p class="divider__line-text">Or</p>
                    <hr class="divider__line">
                </div>

                <a class="button button--icon button--big button--secondary signup__button" href="">
                    <img class="button__img" src="/images/googleIcon.png" alt="google icon">
                    Sign Up with Google
                </a>
                <a class="button button--icon button--big button--secondary signup__button" href="">
                    <img class="button__img" src="/images/facebookIcon.png" alt="facebook icon">
                    Sign Up with Facebook
                </a>
                <div class="signup__buttons">
                    <a class="button button--secondary button--icon signup__button--hidden"
                       href="{{Route("googleLogin")}}">
                        <img class="button__img" src="/images/googleIcon.png" alt="">
                        Google
                    </a>
                    <a class="button button--secondary button--icon signup__button--hidden"
                       href="{{Route("microsoftLogin")}}">
                        <img class="button__img" src="/images/microsoftIcon.png" alt="">
                        Microsoft
                    </a>
                </div>
            </div>
        </div>
    </section>
@endsection
