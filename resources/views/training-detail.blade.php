@extends('layouts.app')
@section('content')
    <section class="training">
        <div class="row justify-content-center">
            <div class="col-md-12 col-lg-9 col-xl-10">
                <div class="page__heading">
                    <h1>Training</h1>
                </div>

                <livewire:training-detail slug="{{$slug}}"/>
            </div>
        </div>
    </section>
@endsection
