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

            <div style="text-align:center; margin-bottom:28px;">
                <i class="icon-lock" style="font-size:2.5rem; color:#CAFF00; display:block; margin-bottom:12px;"></i>
                <h1 style="font-size:1.5rem; font-weight:700; letter-spacing:-0.02em;">Reset your password</h1>
                <p style="color:#8B8BA8; margin-top:6px; font-size:0.9375rem;">
                    Enter your email and we'll send you a reset link.
                </p>
            </div>

            <div class="form__field reset__form-field">
                <label class="form__label" for="email">Email address</label>
                <input class="form__input-field" name="email" id="email" type="email"
                       placeholder="you@example.com">
            </div>

            <button class="button button--big" type="submit">Send reset link</button>

            <div style="text-align:center; margin-top:20px;">
                <a href="{{ route('login') }}" style="color:#8B8BA8; font-size:0.875rem;">
                    ← Back to sign in
                </a>
            </div>
        </form>
    </div>
@endsection
