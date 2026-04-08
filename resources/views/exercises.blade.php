@extends('layouts.app')
@section('content')
    <section class="add-exercise">
        <div class="row justify-content-center">
            <div class="col-md-12 col-lg-10">

                <div class="page__heading">
                    <a class="no-underline" href="{{ url()->previous() }}">
                        <i class="icon-back page__heading-icon"></i>
                    </a>
                    <h1>Exercises</h1>
                </div>

                <h2 class="h3 add-exercise__title">Browse by muscle group</h2>

                @php
                    $categoryNames = [
                        1 => 'Chest',
                        2 => 'Back',
                        3 => 'Legs',
                        4 => 'Arms',
                        5 => 'Shoulders',
                        6 => 'Core',
                        7 => 'Full body',
                        8 => 'Cardio',
                    ];
                    $categorySlug = [
                        1 => 'chest', 2 => 'back', 3 => 'legs', 4 => 'arms',
                        5 => 'shoulders', 6 => 'core', 7 => 'full-body', 8 => 'cardio',
                    ];
                @endphp

                <div class="row">
                    @foreach($exercisesByCategory as $categoryId => $exercises)
                        <div class="col-md-12 col-lg-4">
                            <div class="add-exercise__parts"
                                 data-exercise-toggle="{{ $categorySlug[$categoryId] ?? $categoryId }}">
                                <p class="add-exercise__parts-text">
                                    {{ $categoryNames[$categoryId] ?? 'Other' }}
                                    <span style="color:#52526A; font-size:0.8125rem; margin-left:6px;">
                                        ({{ count($exercises) }})
                                    </span>
                                </p>
                                <i class="icon-arrow-under add-exercise__parts-icon"></i>
                            </div>

                            <div class="add-exercise__exercises"
                                 data-exercises="{{ $categorySlug[$categoryId] ?? $categoryId }}">
                                <div class="row">
                                    @foreach($exercises as $exercise)
                                        <div class="col-12 col-md-6 col-lg-12">
                                            <div class="program__item">
                                                <div class="program__item-label">
                                                    <div class="program__drawing-container">
                                                        <img class="program__drawing"
                                                             src="/images/drawing__running.svg"
                                                             alt="{{ $exercise->name }}">
                                                    </div>
                                                    <div class="program__text-container">
                                                        <a class="program__link"
                                                           href="{{ route('exercise.detail', ['slug' => $exercise->slug]) }}">
                                                            <p class="program__title program__item-title">
                                                                {{ $exercise->name }}
                                                            </p>
                                                        </a>
                                                        <div class="program__icons">
                                                            <div class="program__icon-wrapper">
                                                                <i class="icon-diamond program__icon"
                                                                   style="color:#9B6DFF;"></i>
                                                                <p class="program__icon-text">{{ $exercise->diamonds }}</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>

            </div>
        </div>
    </section>
@endsection
