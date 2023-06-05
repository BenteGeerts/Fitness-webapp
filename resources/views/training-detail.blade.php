@extends('layouts.app')
@section('content')
    <section class="training">
        <div class="row justify-content-center">
            <div class="col-md-12 col-lg-9 col-xl-10">
                <div class="page__heading">
                    <a class="no-underline" href="{{route('training')}}"><i class="icon-back page__heading-icon"></i></a>
                    <h1>Training</h1>
                </div>
                <livewire:training-detail :training='$training'/>
            </div>
        </div>
    </section>
@endsection
