@extends('layouts.app')
@section('content')
    <div class="reset">
        <form class="form reset__form" action="{{route("password.email")}}" method="post">
            @if(session('status'))
                <div class="error error--green reset__error">
                    {{session('status')}}
                </div>
            @endif

            @error('email')
            <div class="error reset__error">
                {{ $message }}
            </div>
            @enderror

            @csrf
            <h1 class="h3" class="reset__title">Enter your email to reset your password</h1>
            <div class="form__field reset__form-field">
                <label class="form__label" for="email">Email</label>
                <input class="form__input-field" name="email" id="email" type="email">
            </div>

            <button class="button" type="submit">Submit</button>
        </form>
    </div>
@endsection
