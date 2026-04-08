@extends('layouts.app')
@section('content')
    <section class="offline">
        <i class="icon-wifi" style="font-size:4rem; color:#52526A; margin-bottom:20px;"></i>
        <h1 style="font-size:2rem; font-weight:800; letter-spacing:-0.025em; margin-bottom:12px;">You're offline</h1>
        <span class="offline__text">
            Check your connection and try again.<br>Your last session data is still available.
        </span>
        <button onclick="window.location.reload()"
                class="button" style="margin-top:28px;">
            Try again
        </button>
    </section>
@endsection
