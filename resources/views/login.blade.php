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

                <form class="form" action="post">
                    <div class="form__field">
                        <label class="form__label" for="">Email</label>
                        <input class="form__input-field" type="email">
                    </div>

                    <div class="form__field"
                        <label class="form__label" for="">Password</label>
                        <div class="form__password">
                            <input class="form__input-field" type="password">
                            <i class="icon-visibility form__icon"></i>
                        </div>

                        <div class="form__extra">
                            <div class="form__checkbox">
                                <input class="form__checkbox-button" type="checkbox">
                                <label class="form__checkbox-label" for="">Remember me</label>
                            </div>
                            <a class="form__password-button" href="">Forgot password?</a>
                        </div>
                    </div>
                </form>

                <div class="login__link-wrapper">
                    <p>Don't have an account? <a class="login__link" href="">Sign Up</a></p>
                </div>


                <a class="button button--big" href="">Login</a>

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
                       href="{{Route("facebookLogin")}}">
                        <img class="button__img" src="/images/facebookIcon.png" alt="">
                        Facebook
                    </a>
                </div>

            </div>
        </div>
    </section>
@endsection
