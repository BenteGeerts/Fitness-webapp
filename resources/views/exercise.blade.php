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

                <div class="exercise__hero">
                    <img class="exercise__hero-img" src="{{ $exercise->image_url }}"
                         alt="{{ $exercise->name }} demonstration">
                    <div class="exercise__hero-overlay"></div>
                    <div class="exercise__hero-content">
                        <h2 class="exercise__name">{{ $exercise->name }}</h2>
                        <span class="exercise__badge">
                            <i class="icon-diamond exercise__badge-icon"></i>
                            {{ $exercise->diamonds }} diamonds per set
                        </span>
                    </div>
                </div>

                <div class="exercise__grid">
                    <div class="exercise__card">
                        <h3 class="exercise__card-title">Common mistakes</h3>
                        <ol class="exercise__mistakes-list">
                            @foreach (explode("\n", $exercise->common_mistakes) as $mistake)
                                @if(trim($mistake))
                                    <li class="exercise__mistakes-item">{{ str_replace('\n', '', e($mistake)) }}</li>
                                @endif
                            @endforeach
                        </ol>
                    </div>

                    <div class="exercise__card">
                        <h3 class="exercise__card-title">Tutorial video</h3>
                        <div class="exercise__video">
                            <iframe src="{{ $exercise->video_url }}" frameborder="0" allowfullscreen></iframe>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>
@endsection
