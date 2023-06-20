@extends('layouts.app')
@section('content')
    <livewire:friends :friendsLeaderboard="$friends" :worldLeaderboard="$worldLeaderboard"/>
@endsection
