@extends('layouts.app')
@section('content')
    @foreach($stepCountData as $stepCount)
        <h1>{{$stepCount}}</h1>
    @endforeach
@endsection
