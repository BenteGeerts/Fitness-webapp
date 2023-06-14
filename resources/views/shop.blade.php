@extends('layouts.app')
@section('content')
    <section class="shop">
        <div class="row justify-content-center">
            <div class="col-md-12 col-lg-10">
                <div class="page__heading">
                    <a class="no-underline" href="{{route('home')}}"><i class="icon-back page__heading-icon"></i></a>
                    <h1>Shop</h1>
                </div>

                <h3 class="h3 shop__heading">Power-Ups</h3>


               <livewire:shop/>


                <div class="shop__more">
                    <p>More coming soon...</p>
                </div>
            </div>
        </div>
    </section>
@endsection
