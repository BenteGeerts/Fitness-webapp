@extends('layouts.app')
@section('content')
    <section class="login">
        <div class="row align-items-center">
            <div class="col-md-12 col-lg-6">
                <div class="hero hero--hidden">
                    <img class="hero__img" src="/images/hero.png" alt="women wearing gym clothes">
                </div>
            </div>

            <div class="col-md-12 col-lg-4 mx-auto">
                <div class="login__heading">
                    <h1 class="login__heading-title">Welcome back</h1>
                    <p class="login__heading-subtitle">Login to your account</p>
                </div>

                <form class="form" method="post" action="{{Route("signIn")}}">
                    @csrf
                    <div class="form__field">
                        <label class="form__label" for="email">Email</label>
                        <input class="form__input-field" name="email" id="email" type="email" value="{{old('email')}}">
                    </div>

                    <div class="form__field">
                        <label class="form__label" for="password">Password</label>
                        <div class="form__password">
                            <input class="form__input-field" name="password" id="password" type="password" data-password>
                            <i class="icon-visibility form__icon" data-toggle-visibility></i>
                        </div>

                        <div class="form__extra">
                            <div class="form__checkbox">
                                <input class="form__checkbox-button" id="remember" name="remember" type="checkbox"  {{ old('remember') ? 'checked' : '' }}>
                                <label class="form__checkbox-label" for="remember">Remember me</label>
                            </div>
                            <a class="form__password-button" href="{{route('password.request')}}">Forgot password?</a>
                        </div>
                    </div>

                    @error('*')
                    <div class="error">{{ $message }}</div>
                    @enderror

                    <div class="link-wrapper">
                        <p>Don't have an account? <a class="link" href="{{Route("signup")}}">Sign Up</a></p>
                    </div>

                    <button class="button button--big" type="submit">Login</button>
                </form>



                <div class="divider__line-wrapper divider__line-wrapper--signup">
                    <hr class="divider__line">
                    <p class="divider__line-text">Or</p>
                    <hr class="divider__line">
                </div>

                <a class="button button--icon button--big button--secondary signup__button" href="{{Route("googleLogin")}}">
                    <img class="button__img" src="/images/googleIcon.png" alt="google icon">
                    Sign Up with Google
                </a>
                <a class="button button--icon button--big button--secondary signup__button" href="{{Route("microsoftLogin")}}">
                    <img class="button__img" src="/images/microsoftIcon.png" alt="microsoft icon">
                    Sign Up with Microsoft
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
