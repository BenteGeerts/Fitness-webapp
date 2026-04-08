<section class="training">
    <div class="row justify-content-center">
        <div class="col-md-12 col-lg-9 col-xl-10">

            <div class="page__heading">
                <a class="no-underline" href="{{ route('home') }}">
                    <i class="icon-back page__heading-icon"></i>
                </a>
                <h1>Training</h1>
            </div>

            <div class="training__switch">
                <p wire:click="showTraining"
                   class="training__switch-item {{ $showTraining ? 'training__switch-item--active' : '' }}">
                    Programs
                </p>
                <p wire:click="showHistory"
                   class="training__switch-item {{ $showHistory ? 'training__switch-item--active' : '' }}">
                    History
                </p>
            </div>

            {{-- Programs tab --}}
            @if($showTraining)
                <div class="training__programs">

                    <h2 class="h3 training__section-heading">Recommended</h2>
                    <div class="training__recommended-programs">
                        @foreach($recommendedPrograms as $program)
                            <div class="program program--big">
                                <div class="program__drawing-container program__drawing-container--big">
                                    <img class="program__drawing program__drawing--big"
                                         src="/images/drawing__workingout.svg"
                                         alt="{{ $program->name }}">
                                </div>
                                <div class="program__text-container program__text-container--big">
                                    <a href="{{ route('training.detail', ['slug' => $program->slug]) }}">
                                        <p class="program__title">{{ $program->name }}</p>
                                    </a>
                                    <div class="program__icons">
                                        <div class="program__icon-wrapper">
                                            <i class="icon-indicator program__icon"></i>
                                            <p class="program__icon-text">{{ $program->level->level }}</p>
                                        </div>
                                        <div class="program__icon-wrapper program__icon-wrapper--big">
                                            <i class="icon-diamond program__icon program__icon--purple"></i>
                                            <p class="program__icon-text">{{ $program->total_diamonds }}</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>

                    <h3 class="h3 training__section-heading training__section-heading--top">All programs</h3>
                    <div class="training__all-programs">
                        @foreach ($allPrograms as $key => $program)
                            @if ($key % 3 === 0)
                                <div class="row">
                            @endif

                            <div class="col-md-12 col-lg-4">
                                <div class="program">
                                    <div class="program__drawing-container">
                                        <img class="program__drawing" src="/images/drawing__training.svg"
                                             alt="{{ $program->name }}">
                                    </div>
                                    <div class="program__text-container">
                                        <a href="{{ route('training.detail', ['slug' => $program->slug]) }}">
                                            <p class="program__title">{{ $program->name }}</p>
                                        </a>
                                        <div class="program__icons">
                                            <div class="program__icon-wrapper">
                                                <i class="icon-indicator program__icon"></i>
                                                <p class="program__icon-text">{{ $program->level->level }}</p>
                                            </div>
                                            <div class="program__icon-wrapper">
                                                <i class="icon-diamond program__icon program__icon--purple"></i>
                                                <p class="program__icon-text">{{ $program->total_diamonds }}</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            @if ($loop->last && ($key + 1) % 3 != 0)
                                <div class="col-md-12 col-lg-4">
                                    <a class="program__button" href="{{ route('training.new') }}">
                                        <div class="program__button-text">
                                            <span>+</span><span class="program__button-label">New program</span>
                                        </div>
                                    </a>
                                </div>
                            @endif

                            @if (($key + 1) % 3 === 0 || $loop->last)
                                </div>
                            @endif

                            @if ($loop->last && ($key + 1) % 3 == 0)
                                <div class="row">
                                    <div class="col-md-12 col-lg-4">
                                        <a class="program__button" href="{{ route('training.new') }}">
                                            <div class="program__button-text">
                                                <span>+</span><span class="program__button-label">New program</span>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                            @endif
                        @endforeach
                    </div>
                </div>
            </div>
            @endif

            {{-- History tab --}}
            @if($showHistory)
                <div class="training__calendar">
                    <input wire:model="dateInput" wire:change.debounce="showExercises"
                           type="text" placeholder="Pick a date" data-input
                           class="training__calendar-input">
                </div>

                <div class="training__programs">
                    <div class="training__diamonds">
                        <i class="icon-diamond training__diamond-icon"></i>
                        <p>+{{ $this->getDiamonds() }} earned</p>
                    </div>

                    <div class="training__stats-wrapper">
                        <div class="training__stats">
                            <div><i class="icon-weight training__stats-icon training__stats-icon--blue"></i></div>
                            <div>
                                <b>{{ $this->getWeight() }}kg</b>
                                <p class="training__stats-label">Lifted</p>
                            </div>
                        </div>
                        <div class="training__stats">
                            <div><i class="icon-360 training__stats-icon training__stats-icon--green"></i></div>
                            <div>
                                <b>{{ $this->getReps() }}</b>
                                <p class="training__stats-label">Reps</p>
                            </div>
                        </div>
                    </div>

                    <div class="row justify-content-md-between justify-content-xl-start">
                        @forelse($exercises ?? [] as $index => $exercise)
                            <div class="col-sm-12 col-md-6 col-lg-5 col-xl-4">
                                <div class="training__history">
                                    <div class="training__history-heading">
                                        <div class="training__history-diamonds">
                                            <i class="icon-diamond training__history-icon"></i>
                                            <span>+{{ $this->getTotalDiamonds($exercise) }}</span>
                                        </div>
                                        <span class="training__history-name">{{ $exercise[0]->exercise->name }}</span>
                                        <span class="training__history-sets">{{ count($exercise) }} sets</span>
                                    </div>

                                    <div class="training__set-header">
                                        <span>#</span>
                                        <span>Reps</span>
                                        <span></span>
                                        <span>Weight</span>
                                    </div>
                                    @foreach ($exercise as $i => $set)
                                        <div class="training__set-row training__set-row--subtle">
                                            <span class="training__set-number">{{ $i + 1 }}</span>
                                            <span>{{ $set->reps }}</span>
                                            <span class="training__set-separator">×</span>
                                            <span>{{ $set->weight }} kg</span>
                                        </div>
                                    @endforeach
                                </div>
                            </div>
                        @empty
                            <div class="col-12 training__empty">
                                <i class="icon-training training__empty-icon"></i>
                                <p class="training__message">No workout logged for this day.</p>
                            </div>
                        @endforelse
                    </div>
                </div>
            @endif

        </div>
    </div>
</section>
