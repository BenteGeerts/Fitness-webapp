<div>
    {{-- Row 1: Streak · Diamonds · Ranking --}}
    <div class="row">
        <div class="dashboard__tile-row">

            <div wire:click="toggleStreakModal" class="col-lg-3 dashboard__tile-col">
                <div class="dashboard__tile-wrapper dashboard__tile-wrapper--orange">
                    <div class="dashboard__tile dashboard__tile--orange">
                        <i class="icon-fire dashboard__tile-background dashboard__tile-background--orange"></i>
                        <div class="dashboard__tile-content">
                            <span class="dashboard__tile-label">Streak</span>
                            <i class="icon-fire dashboard__tile-icon dashboard__tile-icon--orange"></i>
                            <p class="dashboard__tile-value">{{ $streakLength }}</p>
                            <p class="dashboard__tile-text">days</p>
                        </div>
                    </div>
                    <div class="dashboard__tile-arrow dashboard__tile-arrow--orange">
                        <i class="icon-arrow-right"></i>
                    </div>
                </div>
            </div>

            <div wire:click="toggleDiamondsModal" class="col-lg-3 dashboard__tile-col">
                <div class="dashboard__tile-wrapper dashboard__tile-wrapper--red">
                    <div class="dashboard__tile dashboard__tile--red">
                        <i class="icon-diamond dashboard__tile-background dashboard__tile-background--red"></i>
                        <div class="dashboard__tile-content">
                            <span class="dashboard__tile-label">Diamonds</span>
                            <i class="icon-diamond dashboard__tile-icon dashboard__tile-icon--purple"></i>
                            <p class="dashboard__tile-value">{{ $diamonds }}</p>
                        </div>
                    </div>
                    <div class="dashboard__tile-arrow dashboard__tile-arrow--red">
                        <i class="icon-arrow-right"></i>
                    </div>
                </div>
            </div>

            <a class="col-lg-3 dashboard__tile-link" href="{{ route('friends') }}">
                <div class="dashboard__tile-wrapper dashboard__tile-wrapper--green">
                    <div class="dashboard__tile dashboard__tile--green">
                        <i class="icon-ranking dashboard__tile-background dashboard__tile-background--green"></i>
                        <div class="dashboard__tile-content">
                            <span class="dashboard__tile-label">Ranking</span>
                            <i class="icon-ranking dashboard__tile-icon dashboard__tile-icon--green"></i>
                            <p class="dashboard__tile-text">View</p>
                        </div>
                    </div>
                    <div class="dashboard__tile-arrow dashboard__tile-arrow--green">
                        <i class="icon-arrow-right"></i>
                    </div>
                </div>
            </a>

        </div>
    </div>

    {{-- Row 2: Lifted · Weight · More diamonds --}}
    <div class="row">
        <div class="dashboard__tile-row">

            <div wire:click="toggleAnimalsModal" class="col-lg-3 dashboard__tile-col">
                <div class="dashboard__tile-wrapper dashboard__tile-wrapper--light-blue">
                    <div class="dashboard__tile dashboard__tile--light-blue">
                        <i class="icon-pets dashboard__tile-background dashboard__tile-background--light-blue"></i>
                        <div class="dashboard__tile-content">
                            <span class="dashboard__tile-label">Lifted</span>
                            <i class="icon-pets dashboard__tile-icon dashboard__tile-icon--blue"></i>
                            <p class="dashboard__tile-text">
                                {{ strlen($animalComparison) > 20 ? substr($animalComparison, 0, strpos($animalComparison, ',') + 1) . '..' : $animalComparison }}
                            </p>
                        </div>
                    </div>
                    <div class="dashboard__tile-arrow dashboard__tile-arrow--light-blue">
                        <i class="icon-arrow-right"></i>
                    </div>
                </div>
            </div>

            <div wire:click="toggleWeightsModal" class="col-lg-3 dashboard__tile-col">
                <div class="dashboard__tile-wrapper dashboard__tile-wrapper--dark-blue">
                    <div class="dashboard__tile dashboard__tile--dark-blue">
                        <i class="icon-weight dashboard__tile-background dashboard__tile-background--dark-blue"></i>
                        <div class="dashboard__tile-content">
                            <span class="dashboard__tile-label">Last lift</span>
                            <i class="icon-weight dashboard__tile-icon dashboard__tile-icon--blue"></i>
                            <p class="dashboard__tile-value">{{ $lastLiftedWeight }}</p>
                            <p class="dashboard__tile-text">kg</p>
                        </div>
                    </div>
                    <div class="dashboard__tile-arrow dashboard__tile-arrow--dark-blue">
                        <i class="icon-arrow-right"></i>
                    </div>
                </div>
            </div>

            <div wire:click="toggleMoreDiamonds" class="col-lg-3 dashboard__tile-col">
                <div class="dashboard__tile-wrapper dashboard__tile-wrapper--pink">
                    <div class="dashboard__tile dashboard__tile--pink">
                        <i class="icon-diamond dashboard__tile-background dashboard__tile-background--pink"></i>
                        <div class="dashboard__tile-content">
                            <span class="dashboard__tile-label">Earn more</span>
                            <i class="icon-diamond-plus dashboard__tile-icon dashboard__tile-icon--purple"></i>
                            <p class="dashboard__tile-text">How?</p>
                        </div>
                    </div>
                    <div class="dashboard__tile-arrow dashboard__tile-arrow--pink">
                        <i class="icon-arrow-right"></i>
                    </div>
                </div>
            </div>

        </div>
    </div>

    {{-- Modals --}}
    @if($streakModal)
        <div class="modal-backdrop" wire:click="toggleStreakModal"></div>
        <div class="dashboard__modal dashboard__modal--centered">
            <i class="icon-fire dashboard__modal-icon dashboard__modal-icon--orange"></i>
            <h2 class="dashboard__modal-title">{{ $streakLength }}-day streak 🔥</h2>
            <p class="dashboard__modal-text">Keep it alive by completing a workout every day. Miss a day and you'll need a Streak Freeze from the shop.</p>
            <button wire:click="toggleStreakModal" class="button dashboard__modal-button">Got it</button>
        </div>
    @endif

    @if($diamondsModal)
        <div class="modal-backdrop" wire:click="toggleDiamondsModal"></div>
        <div class="dashboard__modal dashboard__modal--centered">
            <i class="icon-diamond dashboard__modal-icon dashboard__modal-icon--purple"></i>
            <h2 class="dashboard__modal-title">{{ $diamonds }} diamonds</h2>
            <p class="dashboard__modal-text">Complete workouts and log heavier lifts to earn more diamonds. Spend them in the Shop!</p>
            <button wire:click="toggleDiamondsModal" class="button dashboard__modal-button">Got it</button>
        </div>
    @endif

    @if($animalsModal)
        <div class="modal-backdrop" wire:click="toggleAnimalsModal"></div>
        <div class="dashboard__modal dashboard__modal--centered">
            <i class="icon-pets dashboard__modal-icon dashboard__modal-icon--blue"></i>
            <h2 class="dashboard__modal-title">Impressive lift!</h2>
            <p class="dashboard__modal-text">Last session you lifted the equivalent of <b>{{ $animalComparison }}</b>. Keep pushing!</p>
            <button wire:click="toggleAnimalsModal" class="button dashboard__modal-button">Got it</button>
        </div>
    @endif

    @if($weightsModal)
        <div class="modal-backdrop" wire:click="toggleWeightsModal"></div>
        <div class="dashboard__modal dashboard__modal--centered">
            <i class="icon-weight dashboard__modal-icon dashboard__modal-icon--blue"></i>
            <h2 class="dashboard__modal-title">{{ $lastLiftedWeight }} kg lifted</h2>
            <p class="dashboard__modal-text">That's your most recent session total. Aim to beat it next time!</p>
            <button wire:click="toggleWeightsModal" class="button dashboard__modal-button">Got it</button>
        </div>
    @endif

    @if($moreDiamonds)
        <div class="modal-backdrop" wire:click="toggleMoreDiamonds"></div>
        <div class="dashboard__modal dashboard__modal--centered">
            <i class="icon-diamond-plus dashboard__modal-icon dashboard__modal-icon--purple"></i>
            <h2 class="dashboard__modal-title">Earn more diamonds</h2>
            <p class="dashboard__modal-text">Add heavier weights or more exercises to your sessions. The harder you train, the more you earn.</p>
            <button wire:click="toggleMoreDiamonds" class="button dashboard__modal-button">Let's go!</button>
        </div>
    @endif
</div>
