<section class="training">
    <div class="row justify-content-center">
        <div class="col-md-12 col-lg-9 col-xl-10">
            <div class="page__heading">
                <h1>Training</h1>
            </div>

            <div class="training__switch">
                <p wire:click="showTraining"
                   class="training__switch-item {{ $showTraining ? 'training__switch-item--active' : '' }}">Programs</p>
                <p wire:click="showHistory"
                   class="training__switch-item {{ $showHistory ? 'training__switch-item--active' : '' }}">History</p>
            </div>

            @if($showTraining)
                <div class="training__programs">
                    <h2 class="h3">Recommended programs</h2>

                    <div class="training__recommended-programs">

                        @foreach($recommendedPrograms as $program)
                            <div class="program program--big">
                                <div class="program__drawing-container program__drawing-container--big">
                                    <img class="program__drawing program__drawing--big"
                                         src="/images/drawing__running.svg"
                                         alt="">
                                </div>

                                <div class="program__text-container program__text-container--big">
                                    <a href="{{route('training.detail', ['slug' => $program->slug])}}"><p
                                            class="program__title">{{$program->name}}</p></a>
                                    <div class="program__icons">
                                        <div class="program__icon-wrapper">
                                            <i class="icon-alarm program__icon"></i>
                                            <p class="program__icon-text">60 min</p>
                                        </div>
                                        <div class="program__icon-wrapper program__icon-wrapper--big">
                                            <i class="icon-diamond program__icon"></i>
                                            <p class="program__icon-text">{{$program->total_diamonds}}</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>

                    <h3 class="h3">All programs</h3>
                    <div class="training__all-programs">


                        @foreach ($allPrograms as $key => $program)
                            @if ($key % 3 === 0)
                                <div class="row">
                                    @endif

                                    <div class="col-md-12 col-lg-4">
                                        <div class="program">
                                            <div class="program__drawing-container">
                                                <img class="program__drawing" src="/images/drawing__running.svg" alt="">
                                            </div>

                                            <div class="program__text-container">
                                                <a href="{{route('training.detail', ['slug' => $program->slug])}}"><p
                                                        class="program__title">{{$program->name}}</p></a>
                                                <div class="program__icons">
                                                    <div class="program__icon-wrapper">
                                                        <i class="icon-alarm program__icon"></i>
                                                        <p class="program__icon-text">60 min</p>
                                                    </div>
                                                    <div class="program__icon-wrapper">
                                                        <i class="icon-diamond program__icon"></i>
                                                        <p class="program__icon-text">{{$program->total_diamonds}}</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    @if ($loop->last && ($key + 1) % 3 != 0)
                                        <div class="col-md-12 col-lg-4">
                                            <a class="program__button" href="{{route('training.new')}}">
                                                <div class="program__button-text">
                                                    <span>+</span>
                                                    <span>Add</span>
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
                                        <a class="program__button" href="{{route('training.new')}}">
                                            <div class="program__button-text">
                                                <span>+</span>
                                                <span>Add</span>
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

        @if($showHistory)

            <div class="training__calendar">
                <input wire:model="dateInput" wire:change.debounce="showExercises" type="text" placeholder="Pick a date"
                       data-input>
            </div>

            <div class="training__programs">
                <div class="training__diamonds">
                    <i class="icon-diamond training__diamond-icon"></i>
                    <p>+{{$this->getDiamonds()}}</p>
                </div>

                <div class="training__stats-wrapper">
                    <div class="training__stats">
                        <div>
                            <i class="icon-weight training__stats-icon"></i>
                        </div>
                        <div>
                            <p>Lifted<br>{{$this->getWeight()}}kg</p>
                        </div>
                    </div>

                    <div class="training__stats">
                        <div>
                            <i class="icon-360 training__stats-icon"></i>
                        </div>
                        <div>
                            <p>Reps <br>{{$this->getReps()}}</p>
                        </div>
                    </div>
                </div>

                <div class="row justify-content-md-between justify-content-xl-start">
                    @forelse($exercises ??[] as $index => $exercise)
                        <div class="col-sm-12 col-md-6 col-lg-5 col-xl-4">
                            <div class="training__history">
                                <div class="training__history-heading">
                                    <div class="training__history-diamonds">
                                        <i class="icon-diamond training__history-icon"></i>
                                        <span>10</span>
                                    </div>
                                    <span class="training__history-name">{{$exercise->exercise->name}}</span>
                                    <span class="training__history-sets">{{count($exercise->reps)}} Sets</span>
                                </div>
                                <div class="training__history-row">
                                    <p>Set</p>
                                    <p>Reps</p>
                                    <p>Weight</p>
                                </div>
                                @for ($i = 0; $i < count($exercise->reps); $i++)
                                    <div class="training__history-row">
                                        <p>{{ $i + 1 }}</p>
                                        <p>{{ $exercise->reps[$i] }}</p>
                                        <p>{{ $exercise->weights[$i] }} KG</p>
                                    </div>
                                @endfor
                            </div>
                        </div>
                    @empty
                        <p class="training__message">You did not training that day</p>
                    @endforelse
                </div>
            </div>
        @endif
    </div>
    </div>
</section>
