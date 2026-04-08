@extends('layouts.app')
@section('content')
    <section class="exercise">
        <div class="row justify-content-center">
            <div class="col-md-12 col-lg-10">

                <div class="page__heading">
                    <a class="no-underline" href="{{ url()->previous() }}">
                        <i class="icon-back page__heading-icon"></i>
                    </a>
                    <h1>Exercise</h1>
                </div>

                <div class="exercise__heading">
                    <h2 class="exercise__name">
                        {{ $exercise->name }}
                    </h2>
                    <p class="exercise__description">
                        <i class="icon-diamond program__icon--purple"></i>
                        {{ $exercise->diamonds }} diamonds per set
                    </p>
                </div>

                <div class="row">
                    <div class="col-md-12 col-lg-6">
                        <div class="exercise__img-wrapper">
                            <img class="exercise__img" src="{{ $exercise->image_url }}"
                                 alt="{{ $exercise->name }} demonstration">
                        </div>

                        <div class="exercise__section">
                            <h3 class="h3 exercise__title">Common mistakes</h3>
                            <ol class="exercise__mistakes-list">
                                @foreach (explode("\n", $exercise->common_mistakes) as $mistake)
                                    @if(trim($mistake))
                                        <li>{{ str_replace('\n', '', e($mistake)) }}</li>
                                    @endif
                                @endforeach
                            </ol>
                        </div>
                    </div>

                    <div class="col-md-12 col-lg-6">
                        <h3 class="h3 exercise__title exercise__title--top">
                            Tutorial video
                        </h3>
                        <div class="embed-container">
                            <iframe src="{{ $exercise->video_url }}" frameborder="0" allowfullscreen></iframe>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>
@endsection
