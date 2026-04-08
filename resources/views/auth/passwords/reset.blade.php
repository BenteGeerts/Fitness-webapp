@extends('layouts.app')
@section('content')
    <div class="reset">
        <form class="form reset__form" action="{{ route('password.update') }}" method="post">
            @csrf

            <div style="text-align:center; margin-bottom:28px;">
                <i class="icon-lock" style="font-size:2.5rem; color:#CAFF00; display:block; margin-bottom:12px;"></i>
                <h1 style="font-size:1.5rem; font-weight:700; letter-spacing:-0.02em;">Set new password</h1>
                <p style="color:#8B8BA8; margin-top:6px; font-size:0.9375rem;">
                    Choose a strong password you haven't used before.
                </p>
            </div>

            @error('email')
                <div class="error reset__error">{{ $message }}</div>
            @enderror

            @if ($errors->has('password'))
                <span class="error reset__error">{{ $errors->first('password') }}</span>
            @endif

            <div class="form__field reset__form-field">
                <label class="form__label" for="email">Email address</label>
                <input class="form__input-field" name="email" id="email" type="email"
                       value="{{ $email }}" placeholder="you@example.com">
                <input name="token" value="{{ $token }}" hidden>
            </div>

            <div class="form__field reset__form-field">
                <label class="form__label" for="password">New password</label>
                <div class="form__password">
                    <input class="form__input-field" name="password" id="password"
                           type="password" placeholder="At least 8 characters" data-password>
                    <i class="icon-visibility form__icon" data-toggle-visibility></i>
                </div>
            </div>

            <div class="form__field reset__form-field">
                <label class="form__label" for="password_confirmation">Confirm new password</label>
                <input class="form__input-field" name="password_confirmation"
                       id="password_confirmation" type="password" placeholder="Repeat password">
            </div>

            <button class="button button--big" type="submit">Update password</button>
        </form>
    </div>
@endsection
