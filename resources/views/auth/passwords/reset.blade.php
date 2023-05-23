@extends('layouts.app')
@section('content')
   <div class="reset">
       <form class="form reset__form" action="{{route("password.update")}}" method="post">
           @csrf

           @error('email')
           <div class="error reset__error">
               {{ $message }}
           </div>
           @enderror
           <h1 class="h3" class="reset__title">Enter your new password to update it</h1>
           <div class="form__field reset__form-field">
               <label class="form__label" for="email">Email</label>
               <input class="form__input-field" name="email" id="email" type="email" value="{{$email}}">
               <input name="token" value="{{$token}}" hidden>

               <label class="form__label" for="password">Password</label>
               <input class="form__input-field" name="password" id="password" type="password">

               <label class="form__label" for="password_confirmation">Password confirmation</label>
               <input class="form__input-field" name="password_confirmation" id="password_confirmation" type="password">
           </div>
           @if ($errors->has('password'))
               <span class="error reset__error">{{ $errors->first('password') }}</span>
           @endif
           <button class="button" type="submit">Submit</button>
       </form>
   </div>
@endsection
