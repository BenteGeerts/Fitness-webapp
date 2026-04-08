@extends('layouts.app')
@section('content')
    <section class="offline">
        <i class="icon-wifi offline__icon"></i>
        <h1 class="offline__title">You're offline</h1>
        <span class="offline__text">
            Check your connection and try again.<br>Your last session data is still available.
        </span>
        <button onclick="window.location.reload()" class="button offline__button">
            Try again
        </button>
    </section>
@endsection
