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

                <div class="exercise__heading" style="margin-top: 12px; margin-bottom: 24px;">
                    <h2 style="font-size:1.75rem; font-weight:800; letter-spacing:-0.025em;">
                        {{ $exercise->name }}
                    </h2>
                    <p style="color:#8B8BA8; font-size:0.9375rem; margin-top:6px;">
                        <i class="icon-diamond" style="color:#9B6DFF; margin-right:4px;"></i>
                        {{ $exercise->diamonds }} diamonds per set
                    </p>
                </div>

                <div class="row">
                    <div class="col-md-12 col-lg-6">
                        <div class="exercise__img-wrapper">
                            <img class="exercise__img" src="{{ $exercise->image_url }}"
                                 alt="{{ $exercise->name }} demonstration"
                                 style="border-radius:16px; width:100%; object-fit:cover; max-height:300px;">
                        </div>

                        <div style="margin-top: 20px;">
                            <h3 class="h3 exercise__title" style="margin-bottom:12px;">Common mistakes</h3>
                            <ol style="color:#8B8BA8; line-height:1.8; padding-left:20px;">
                                @foreach (explode("\n", $exercise->common_mistakes) as $mistake)
                                    @if(trim($mistake))
                                        <li>{{ str_replace('\n', '', e($mistake)) }}</li>
                                    @endif
                                @endforeach
                            </ol>
                        </div>
                    </div>

                    <div class="col-md-12 col-lg-6">
                        <h3 class="h3 exercise__title" style="margin-bottom:12px; margin-top:20px;">
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
