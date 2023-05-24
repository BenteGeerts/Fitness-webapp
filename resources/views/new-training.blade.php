@extends('layouts.app')
@section('content')
   <livewire:new-training diamonds="{{$diamonds}}" exercises="{{$exercises}}"/>
@endsection
