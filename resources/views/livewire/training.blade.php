<section class="training">
    <div class="row justify-content-center">
        <div class="col-md-12 col-lg-9 col-xl-10">
            <div class="page__heading">
                <h1>Training</h1>
            </div>

            <div class="training__switch">
                <p wire:click="showTraining" class="training__switch-item {{ $showTraining ? 'training__switch-item--active' : '' }}">Programs</p>
                <p wire:click="showHistory" class="training__switch-item {{ $showHistory ? 'training__switch-item--active' : '' }}">History</p>
            </div>

            @if($showTraining)
                <div class="training__programs">
                    <h2 class="h3">Recommended programs</h2>

                    <div class="training__recommended-programs">

                        @foreach($programs as $program)
                            <div class="program program--big">
                                <div class="program__drawing-container program__drawing-container--big">
                                    <img class="program__drawing program__drawing--big" src="/images/drawing__running.svg"
                                         alt="">
                                </div>

                                <div class="program__text-container program__text-container--big">
                                    <p class="program__title">{{$program->name}}</p>
                                    <div class="program__icons">
                                        <div class="program__icon-wrapper">
                                            <i class="icon-alarm program__icon"></i>
                                            <p class="program__icon-text">60 min</p>
                                        </div>
                                        <div class="program__icon-wrapper program__icon-wrapper--big">
                                            <i class="icon-diamond program__icon"></i>
                                            <p class="program__icon-text">{{$this->getTotalDiamonds($program)}}</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            @endforeach
                    </div>

                    <h3 class="h3">All programs</h3>
                    <div class="training__all-programs">
                        <div class="row">
                            <div class="col-md-12 col-lg-4">
                                <div class="program">
                                    <div class="program__drawing-container">
                                        <img class="program__drawing" src="/images/drawing__running.svg" alt="">
                                    </div>

                                    <div class="program__text-container">
                                        <p class="program__title">Running</p>
                                        <div class="program__icons">
                                            <div class="program__icon-wrapper">
                                                <i class="icon-alarm program__icon"></i>
                                                <p class="program__icon-text">60 min</p>
                                            </div>
                                            <div class="program__icon-wrapper">
                                                <i class="icon-diamond program__icon"></i>
                                                <p class="program__icon-text">552</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-12 col-lg-4">
                                <div class="program">
                                    <div class="program__drawing-container">
                                        <img class="program__drawing" src="/images/drawing__running.svg" alt="">
                                    </div>

                                    <div class="program__text-container">
                                        <p class="program__title">Running</p>
                                        <div class="program__icons">
                                            <div class="program__icon-wrapper">
                                                <i class="icon-alarm program__icon"></i>
                                                <p class="program__icon-text">60 min</p>
                                            </div>
                                            <div class="program__icon-wrapper">
                                                <i class="icon-diamond program__icon"></i>
                                                <p class="program__icon-text">552</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-12 col-lg-4">
                                <div class="program">
                                    <div class="program__drawing-container">
                                        <img class="program__drawing" src="/images/drawing__running.svg" alt="">
                                    </div>

                                    <div class="program__text-container">
                                        <p class="program__title">Running</p>
                                        <div class="program__icons">
                                            <div class="program__icon-wrapper">
                                                <i class="icon-alarm program__icon"></i>
                                                <p class="program__icon-text">60 min</p>
                                            </div>
                                            <div class="program__icon-wrapper">
                                                <i class="icon-diamond program__icon"></i>
                                                <p class="program__icon-text">552</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12 col-lg-4">
                                <div class="program">
                                    <div class="program__drawing-container">
                                        <img class="program__drawing" src="/images/drawing__running.svg" alt="">
                                    </div>

                                    <div class="program__text-container">
                                        <p class="program__title">Running</p>
                                        <div class="program__icons">
                                            <div class="program__icon-wrapper">
                                                <i class="icon-alarm program__icon"></i>
                                                <p class="program__icon-text">60 min</p>
                                            </div>
                                            <div class="program__icon-wrapper">
                                                <i class="icon-diamond program__icon"></i>
                                                <p class="program__icon-text">552</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-12 col-lg-4">
                                <div class="program">
                                    <div class="program__drawing-container">
                                        <img class="program__drawing" src="/images/drawing__running.svg" alt="">
                                    </div>

                                    <div class="program__text-container">
                                        <p class="program__title">Running</p>
                                        <div class="program__icons">
                                            <div class="program__icon-wrapper">
                                                <i class="icon-alarm program__icon"></i>
                                                <p class="program__icon-text">60 min</p>
                                            </div>
                                            <div class="program__icon-wrapper">
                                                <i class="icon-diamond program__icon"></i>
                                                <p class="program__icon-text">552</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-12 col-lg-4">
                                <div class="program">
                                    <div class="program__drawing-container">
                                        <img class="program__drawing" src="/images/drawing__running.svg" alt="">
                                    </div>

                                    <div class="program__text-container">
                                        <p class="program__title">Running</p>
                                        <div class="program__icons">
                                            <div class="program__icon-wrapper">
                                                <i class="icon-alarm program__icon"></i>
                                                <p class="program__icon-text">60 min</p>
                                            </div>
                                            <div class="program__icon-wrapper">
                                                <i class="icon-diamond program__icon"></i>
                                                <p class="program__icon-text">552</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="training__buttons">
                        <a class="button" href="">Create new</a>
                        <a class="button button--secondary" href="">Load more</a>
                    </div>
                </div>
            @endif

            @if($showHistory)
                <div class="training__programs">
                    <div class="training__diamonds">
                        <i class="icon-diamond training__diamond-icon"></i>
                        <p>+58</p>
                    </div>

                    <div class="training__stats-wrapper">
                        <div class="training__stats">
                            <div>
                                <i class="icon-weight training__stats-icon"></i>
                            </div>
                            <div>
                                <p>Lifted<br>6000kg</p>
                            </div>
                        </div>

                        <div class="training__stats">
                            <div>
                                <i class="icon-360 training__stats-icon"></i>
                            </div>
                            <div>
                                <p>Reps <br>80</p>
                            </div>
                        </div>
                    </div>

                    <div class="row justify-content-between">
                        <div class="col-sm-12 col-md-6 col-lg-5 col-xl-3">
                            <div class="training__history">
                                <div class="training__history-heading">
                                    <div class="training__history-diamonds">
                                        <i class="icon-diamond training__history-icon"></i>
                                        <span>10</span>
                                    </div>
                                    <span class="training__history-name">Pull up</span>
                                    <span class="training__history-sets">3 sets</span>
                                </div>
                                <div class="training__history-row">
                                    <p>Set</p>
                                    <p>Reps</p>
                                    <p>Weight</p>
                                </div>
                                <div class="training__history-row">
                                    <p>1</p>
                                    <p>6</p>
                                    <p>85</p>
                                </div>
                                <div class="training__history-row">
                                    <p>1</p>
                                    <p>6</p>
                                    <p>85</p>
                                </div>
                                <div class="training__history-row">
                                    <p>1</p>
                                    <p>6</p>
                                    <p>85</p>
                                </div>
                            </div>
                            <div class="training__history">
                                <div class="training__history-heading">
                                    <div class="training__history-diamonds">
                                        <i class="icon-diamond training__history-icon"></i>
                                        <span>10</span>
                                    </div>
                                    <span class="training__history-name">Pull up</span>
                                    <span class="training__history-sets">3 sets</span>
                                </div>
                                <div class="training__history-row">
                                    <p>Set</p>
                                    <p>Reps</p>
                                    <p>Weight</p>
                                </div>
                                <div class="training__history-row">
                                    <p>1</p>
                                    <p>6</p>
                                    <p>85</p>
                                </div>
                                <div class="training__history-row">
                                    <p>1</p>
                                    <p>6</p>
                                    <p>85</p>
                                </div>
                                <div class="training__history-row">
                                    <p>1</p>
                                    <p>6</p>
                                    <p>85</p>
                                </div>
                            </div>
                        </div>

                        <div class="col-sm-12 col-md-6 col-lg-5 col-xl-3">
                            <div class="training__history">
                                <div class="training__history-heading">
                                    <div class="training__history-diamonds">
                                        <i class="icon-diamond training__history-icon"></i>
                                        <span>10</span>
                                    </div>
                                    <span class="training__history-name">Pull up</span>
                                    <span class="training__history-sets">3 sets</span>
                                </div>
                                <div class="training__history-row">
                                    <p>Set</p>
                                    <p>Reps</p>
                                    <p>Weight</p>
                                </div>
                                <div class="training__history-row">
                                    <p>1</p>
                                    <p>6</p>
                                    <p>85</p>
                                </div>
                                <div class="training__history-row">
                                    <p>1</p>
                                    <p>6</p>
                                    <p>85</p>
                                </div>
                                <div class="training__history-row">
                                    <p>1</p>
                                    <p>6</p>
                                    <p>85</p>
                                </div>
                            </div>
                            <div class="training__history">
                                <div class="training__history-heading">
                                    <div class="training__history-diamonds">
                                        <i class="icon-diamond training__history-icon"></i>
                                        <span>10</span>
                                    </div>
                                    <span class="training__history-name">Pull up</span>
                                    <span class="training__history-sets">3 sets</span>
                                </div>
                                <div class="training__history-row">
                                    <p>Set</p>
                                    <p>Reps</p>
                                    <p>Weight</p>
                                </div>
                                <div class="training__history-row">
                                    <p>1</p>
                                    <p>6</p>
                                    <p>85</p>
                                </div>
                                <div class="training__history-row">
                                    <p>1</p>
                                    <p>6</p>
                                    <p>85</p>
                                </div>
                                <div class="training__history-row">
                                    <p>1</p>
                                    <p>6</p>
                                    <p>85</p>
                                </div>
                            </div>
                        </div>

                        <div class="col-sm-12 col-md-6 col-lg-5 col-xl-3">
                            <div class="training__history">
                                <div class="training__history-heading">
                                    <div class="training__history-diamonds">
                                        <i class="icon-diamond training__history-icon"></i>
                                        <span>10</span>
                                    </div>
                                    <span class="training__history-name">Pull up</span>
                                    <span class="training__history-sets">3 sets</span>
                                </div>
                                <div class="training__history-row">
                                    <p>Set</p>
                                    <p>Reps</p>
                                    <p>Weight</p>
                                </div>
                                <div class="training__history-row">
                                    <p>1</p>
                                    <p>6</p>
                                    <p>85</p>
                                </div>
                                <div class="training__history-row">
                                    <p>1</p>
                                    <p>6</p>
                                    <p>85</p>
                                </div>
                                <div class="training__history-row">
                                    <p>1</p>
                                    <p>6</p>
                                    <p>85</p>
                                </div>
                            </div>
                            <div class="training__history">
                                <div class="training__history-heading">
                                    <div class="training__history-diamonds">
                                        <i class="icon-diamond training__history-icon"></i>
                                        <span>10</span>
                                    </div>
                                    <span class="training__history-name">Pull up</span>
                                    <span class="training__history-sets">3 sets</span>
                                </div>
                                <div class="training__history-row">
                                    <p>Set</p>
                                    <p>Reps</p>
                                    <p>Weight</p>
                                </div>
                                <div class="training__history-row">
                                    <p>1</p>
                                    <p>6</p>
                                    <p>85</p>
                                </div>
                                <div class="training__history-row">
                                    <p>1</p>
                                    <p>6</p>
                                    <p>85</p>
                                </div>
                                <div class="training__history-row">
                                    <p>1</p>
                                    <p>6</p>
                                    <p>85</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            @endif
        </div>
    </div>
</section>
