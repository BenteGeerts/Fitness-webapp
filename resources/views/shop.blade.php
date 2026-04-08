@extends('layouts.app')
@section('content')
    <section class="shop">
        <div class="row justify-content-center">
            <div class="col-md-12 col-lg-10">

                <div class="page__heading">
                    <a class="no-underline" href="{{ route('home') }}">
                        <i class="icon-back page__heading-icon"></i>
                    </a>
                    <h1>Shop</h1>
                </div>

                <div style="margin-top:8px; margin-bottom:24px; color:#8B8BA8; font-size:0.9375rem;">
                    Spend your diamonds on power-ups to boost your training.
                </div>

                <h3 class="h3 shop__heading">Power-Ups</h3>

                <livewire:shop-payment/>

                <div class="shop__more">
                    <span>More power-ups coming soon</span>
                </div>

            </div>
        </div>
    </section>
@endsection
