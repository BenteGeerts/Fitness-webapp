<div>
    <div class="row">
        <div class="dashboard__tile-row">
            <div wire:click="toggleStreakModal" class="col-lg-3">
                <div class="dashboard__tile-wrapper dashboard__tile-wrapper--orange">
                    <div class="dashboard__tile dashboard__tile--orange">
                        <i class="icon-fire dashboard__tile-background dashboard__tile-background--orange"></i>
                        <div class="dashboard__tile-content">
                            <i class="icon-fire dashboard__tile-icon"></i>
                            <p class="dashboard__tile-text">{{$streakLength}} days</p>
                        </div>
                    </div>

                    <div class="dashboard__tile-arrow dashboard__tile-arrow--orange">
                        <i class="icon-arrow-right"></i>
                    </div>
                </div>
            </div>

            <div wire:click="toggleDiamondsModal" class="col-lg-3">
                <div class="dashboard__tile-wrapper dashboard__tile-wrapper--red">
                    <div class="dashboard__tile dashboard__tile--red">
                        <i class="icon-diamond dashboard__tile-background dashboard__tile-background--red"></i>
                        <div class="dashboard__tile-content">
                            <i class="icon-diamond dashboard__tile-icon"></i>
                            <p class="dashboard__tile-text">{{$diamonds}}</p>
                        </div>
                    </div>

                    <div class="dashboard__tile-arrow dashboard__tile-arrow--red">
                        <i class="icon-arrow-right"></i>
                    </div>
                </div>
            </div>

            <a class="col-lg-3" href="{{route('friends')}}">
                <div class="dashboard__tile-wrapper dashboard__tile-wrapper--green">
                    <div class="dashboard__tile dashboard__tile--green">
                        <i class="icon-ranking dashboard__tile-background dashboard__tile-background--green"></i>
                        <div class="dashboard__tile-content">
                            <i class="icon-ranking dashboard__tile-icon"></i>
                            <p class="dashboard__tile-text">Ranking</p>
                        </div>
                    </div>

                    <div class="dashboard__tile-arrow dashboard__tile-arrow--green">
                        <i class="icon-arrow-right"></i>
                    </div>
                </div>
            </a>

        </div>
    </div>

    <div class="row">
        <div class="dashboard__tile-row">
            <div wire:click="toggleAnimalsModal" class="col-lg-3">
                <div class="dashboard__tile-wrapper dashboard__tile-wrapper--light-blue">
                    <div class="dashboard__tile dashboard__tile--light-blue">
                        <i class="icon-pets dashboard__tile-background dashboard__tile-background--light-blue"></i>
                        <div class="dashboard__tile-content">
                            <i class="icon-pets dashboard__tile-icon"></i>
                            <p class="dashboard__tile-text">Lifted 50 raccoons</p>
                        </div>
                    </div>
                    <div class="dashboard__tile-arrow dashboard__tile-arrow--light-blue">
                        <i class="icon-arrow-right"></i>
                    </div>
                </div>
            </div>

            <div wire:click="toggleWeightsModal" class="col-lg-3">
                <div class="dashboard__tile-wrapper dashboard__tile-wrapper--dark-blue">
                    <div class="dashboard__tile dashboard__tile--dark-blue">
                        <i class="icon-weight dashboard__tile-background dashboard__tile-background--dark-blue"></i>
                        <div class="dashboard__tile-content">
                            <i class="icon-weight dashboard__tile-icon"></i>
                            <p class="dashboard__tile-text">{{$lastLiftedWeight}} kg</p>
                        </div>
                    </div>
                    <div class="dashboard__tile-arrow dashboard__tile-arrow--dark-blue">
                        <i class="icon-arrow-right"></i>
                    </div>
                </div>
            </div>

            <div wire:click="toggleMoreDiamonds" class="col-lg-3">
                <div class="dashboard__tile-wrapper dashboard__tile-wrapper--pink">
                    <div class="dashboard__tile dashboard__tile--pink">
                        <i class="icon-diamond dashboard__tile-background dashboard__tile-background--pink"></i>
                        <div class="dashboard__tile-content">
                            <i class="icon-diamond-plus dashboard__tile-icon"></i>
                        </div>
                    </div>
                    <div class="dashboard__tile-arrow dashboard__tile-arrow--pink">
                        <i class="icon-arrow-right"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>

   @if($streakModal)
        <div class="dashboard__modal dashboard__modal--centered">
            <p>You current streak is <b>{{$streakLength}} days</b>. <br>You can extend it by doing a training every day.</p>
            <button wire:click="toggleStreakModal" class="button dashboard__modal-button">Oke</button>
        </div>
   @endif

    @if($diamondsModal)
        <div class="dashboard__modal dashboard__modal--centered">
            <p>You currently have <b>{{$diamonds}} diamonds</b>. <br>You can get more diamonds by doing a training.</p>
            <button wire:click="toggleDiamondsModal" class="button dashboard__modal-button">Oke</button>
        </div>
    @endif

    @if($animalsModal)
        <div class="dashboard__modal dashboard__modal--centered">
            <p>You lifted <b>{{$diamonds}}</b> during your last training. <br>That's impressive! Keep up the good work!</p>
            <button wire:click="toggleAnimalsModal" class="button dashboard__modal-button">Oke</button>
        </div>
    @endif

    @if($weightsModal)
        <div class="dashboard__modal dashboard__modal--centered">
            <p>You lifted <b>{{$lastLiftedWeight}} kg</b> during your last training. <br>That's impressive! Keep up the good work!</p>
            <button wire:click="toggleWeightsModal" class="button dashboard__modal-button">Oke</button>
        </div>
    @endif

    @if($moreDiamonds)
        <div class="dashboard__modal dashboard__modal--centered">
            <p>You can earn more diamonds be doing a training. <br> If you do more exercises or heavier exercises you earn more diamonds. Let's go gym!</p>
            <button wire:click="toggleMoreDiamonds" class="button dashboard__modal-button">Oke</button>
        </div>
    @endif
</div>
