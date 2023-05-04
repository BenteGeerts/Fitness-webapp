@extends('layouts.app')
@section('content')

    <a href="{{Route("googleLogin")}}">Login with Google</a>
    <a href="{{Route("facebookLogin")}}">Login with Facebook</a>

@endsection
