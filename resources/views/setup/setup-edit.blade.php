@extends('layouts.app')
@section('content')
    <livewire:setup-edit weight="{{$weight}}" height="{{$height}}" age="{{$age}}"
                    gender="{{$gender}}"
                    goal="{{$goal}}"
                    visits="{{$minVisits}}"/>
@endsection
