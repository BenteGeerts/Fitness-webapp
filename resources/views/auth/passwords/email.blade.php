@extends('layouts.app')
@section('content')
    <div class="reset">
        <form class="form reset__form" action="{{ route('password.email') }}" method="post">
            @csrf

            @if(session('status'))
                <div class="error error--green reset__error">{{ session('status') }}</div>
            @endif

            @error('email')
                <div class="error reset__error">{{ $message }}</div>
            @enderror

            <div class="reset__header">
                <i class="icon-lock reset__header-icon"></i>
                <h1 class="reset__header-title">Reset your password</h1>
                <p class="reset__header-text">
                    Enter your email and we'll send you a reset link.
                </p>
            </div>

            <div class="form__field reset__form-field">
                <label class="form__label" for="email">Email address</label>
                <input class="form__input-field" name="email" id="email" type="email"
                       placeholder="you@example.com">
            </div>

            <button class="button button--big" type="submit">Send reset link</button>

            <div class="reset__back">
                <a href="{{ route('login') }}" class="reset__back-link">
                    ← Back to sign in
                </a>
            </div>
        </form>
    </div>
@endsection
