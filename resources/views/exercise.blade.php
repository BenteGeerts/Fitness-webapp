@extends('layouts.app')
@section('content')
    <section class="exercise">
        <div class="row justify-content-center">
            <div class="col-md-12 col-lg-10">
                <div class="page__heading">
                    <a class="no-underline" href="{{url()->previous()}}"><i class="icon-back page__heading-icon"></i></a>
                    <h1>Training</h1>
                </div>

                <h2 class="h3 exercise__heading">{{$exercise->name}}</h2>

                <div class="row">
                    <div class="col-md-12 col-lg-6">
                        <div class="exercise__img-wrapper">
                            <img class="exercise__img" src="{{$exercise->image_url}}" alt="">
                        </div>

                        <h3 class="h3 exercise__title">Common mistakes</h3>
                        <ol>
                            <li>Going too heavy</li>
                            <li>Flaring elbows out at 90° angles</li>
                            <li>Bending wrists backwards</li>
                            <li>Not keeping the feet grounded</li>
                            <li>Pressing with a thumbless grip</li>
                        </ol>
                    </div>

                    <div class="col-md-12 col-lg-6">
                        <h3 class="h3 exercise__title">Tutorial</h3>
                        <div class='embed-container'>
                            <iframe src='{{$exercise->video_url}}' frameborder='0' allowfullscreen></iframe>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
