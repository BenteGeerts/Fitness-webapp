@extends('layouts.app')
@section('content')
    <section class="login">
        <div class="row align-items-center login__row">
            <div class="col-md-12 col-lg-6">
                <div class="hero hero--hidden">
                    <img class="hero__img" src="/images/hero.png" alt="women wearing gym clothes">
                </div>
            </div>

            <div class="col-md-12 col-lg-4 mx-auto">
                <div class="login__heading">
                    <h1 class="login__heading-title">Welcome back</h1>
                    <p class="login__heading-subtitle">Sign in to continue your streak</p>
                </div>

                <form class="form" method="post" action="{{ Route('signIn') }}">
                    @csrf
                    <div class="form__field">
                        <label class="form__label" for="email">Email</label>
                        <input class="form__input-field" name="email" id="email" type="email"
                               placeholder="you@example.com" value="{{ old('email') }}">
                    </div>

                    <div class="form__field">
                        <label class="form__label" for="password">Password</label>
                        <div class="form__password">
                            <input class="form__input-field" name="password" id="password"
                                   type="password" placeholder="••••••••" data-password>
                            <i class="icon-visibility form__icon" data-toggle-visibility></i>
                        </div>

                        <div class="form__extra">
                            <div class="form__checkbox">
                                <input class="form__checkbox-button" id="remember" name="remember"
                                       type="checkbox" {{ old('remember') ? 'checked' : '' }}>
                                <label for="remember" class="form__checkbox-label">Remember me</label>
                            </div>
                            <a class="form__password-button" href="{{ route('password.request') }}">Forgot password?</a>
                        </div>
                    </div>

                    @error('*')
                        <div class="error">{{ $message }}</div>
                    @enderror

                    <button class="button button--big" type="submit">Sign in</button>

                    <div class="link-wrapper">
                        <p class="login__signin-text">
                            Don't have an account? <a class="link" href="{{ Route('signup') }}">Create one</a>
                        </p>
                    </div>
                </form>

                <div class="divider__line-wrapper divider__line-wrapper--signup">
                    <hr class="divider__line">
                    <p class="divider__line-text">or</p>
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
                    <a class="button button--secondary button--icon signup__button--hidden" href="{{ Route('googleLogin') }}">
                        <img class="button__img" src="/images/googleIcon.png" alt="Google">
                        Google
                    </a>
                    <a class="button button--secondary button--icon signup__button--hidden" href="{{ Route('microsoftLogin') }}">
                        <img class="button__img" src="/images/microsoftIcon.png" alt="Microsoft">
                        Microsoft
                    </a>
                </div>
            </div>
        </div>
    </section>
@endsection
