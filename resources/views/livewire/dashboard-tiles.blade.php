<div>
    {{-- Row 1: Streak · Diamonds · Ranking --}}
    <div class="row">
        <div class="dashboard__tile-row">

            <div wire:click="toggleStreakModal" class="col-lg-3" style="cursor:pointer;">
                <div class="dashboard__tile-wrapper dashboard__tile-wrapper--orange">
                    <div class="dashboard__tile dashboard__tile--orange">
                        <i class="icon-fire dashboard__tile-background dashboard__tile-background--orange"></i>
                        <div class="dashboard__tile-content">
                            <span class="dashboard__tile-label">Streak</span>
                            <i class="icon-fire dashboard__tile-icon" style="color:#FF8B3D;"></i>
                            <p class="dashboard__tile-value">{{ $streakLength }}</p>
                            <p class="dashboard__tile-text">days</p>
                        </div>
                    </div>
                    <div class="dashboard__tile-arrow dashboard__tile-arrow--orange">
                        <i class="icon-arrow-right"></i>
                    </div>
                </div>
            </div>

            <div wire:click="toggleDiamondsModal" class="col-lg-3" style="cursor:pointer;">
                <div class="dashboard__tile-wrapper dashboard__tile-wrapper--red">
                    <div class="dashboard__tile dashboard__tile--red">
                        <i class="icon-diamond dashboard__tile-background dashboard__tile-background--red"></i>
                        <div class="dashboard__tile-content">
                            <span class="dashboard__tile-label">Diamonds</span>
                            <i class="icon-diamond dashboard__tile-icon" style="color:#9B6DFF;"></i>
                            <p class="dashboard__tile-value">{{ $diamonds }}</p>
                        </div>
                    </div>
                    <div class="dashboard__tile-arrow dashboard__tile-arrow--red">
                        <i class="icon-arrow-right"></i>
                    </div>
                </div>
            </div>

            <a class="col-lg-3" href="{{ route('friends') }}" style="text-decoration:none;">
                <div class="dashboard__tile-wrapper dashboard__tile-wrapper--green">
                    <div class="dashboard__tile dashboard__tile--green">
                        <i class="icon-ranking dashboard__tile-background dashboard__tile-background--green"></i>
                        <div class="dashboard__tile-content">
                            <span class="dashboard__tile-label">Ranking</span>
                            <i class="icon-ranking dashboard__tile-icon" style="color:#39D98A;"></i>
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

            <div wire:click="toggleAnimalsModal" class="col-lg-3" style="cursor:pointer;">
                <div class="dashboard__tile-wrapper dashboard__tile-wrapper--light-blue">
                    <div class="dashboard__tile dashboard__tile--light-blue">
                        <i class="icon-pets dashboard__tile-background dashboard__tile-background--light-blue"></i>
                        <div class="dashboard__tile-content">
                            <span class="dashboard__tile-label">Lifted</span>
                            <i class="icon-pets dashboard__tile-icon" style="color:#4F8EF7;"></i>
                            <p class="dashboard__tile-text" style="font-size:0.75rem; line-height:1.2;">
                                {{ strlen($animalComparison) > 20 ? substr($animalComparison, 0, strpos($animalComparison, ',') + 1) . '..' : $animalComparison }}
                            </p>
                        </div>
                    </div>
                    <div class="dashboard__tile-arrow dashboard__tile-arrow--light-blue">
                        <i class="icon-arrow-right"></i>
                    </div>
                </div>
            </div>

            <div wire:click="toggleWeightsModal" class="col-lg-3" style="cursor:pointer;">
                <div class="dashboard__tile-wrapper dashboard__tile-wrapper--dark-blue">
                    <div class="dashboard__tile dashboard__tile--dark-blue">
                        <i class="icon-weight dashboard__tile-background dashboard__tile-background--dark-blue"></i>
                        <div class="dashboard__tile-content">
                            <span class="dashboard__tile-label">Last lift</span>
                            <i class="icon-weight dashboard__tile-icon" style="color:#4F8EF7;"></i>
                            <p class="dashboard__tile-value">{{ $lastLiftedWeight }}</p>
                            <p class="dashboard__tile-text">kg</p>
                        </div>
                    </div>
                    <div class="dashboard__tile-arrow dashboard__tile-arrow--dark-blue">
                        <i class="icon-arrow-right"></i>
                    </div>
                </div>
            </div>

            <div wire:click="toggleMoreDiamonds" class="col-lg-3" style="cursor:pointer;">
                <div class="dashboard__tile-wrapper dashboard__tile-wrapper--pink">
                    <div class="dashboard__tile dashboard__tile--pink">
                        <i class="icon-diamond dashboard__tile-background dashboard__tile-background--pink"></i>
                        <div class="dashboard__tile-content">
                            <span class="dashboard__tile-label">Earn more</span>
                            <i class="icon-diamond-plus dashboard__tile-icon" style="color:#9B6DFF;"></i>
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
            <i class="icon-fire" style="font-size:2.5rem; color:#FF8B3D; margin-bottom:12px;"></i>
            <h2 style="font-size:1.25rem; margin-bottom:8px;">{{ $streakLength }}-day streak 🔥</h2>
            <p class="dashboard__modal-text">Keep it alive by completing a workout every day. Miss a day and you'll need a Streak Freeze from the shop.</p>
            <button wire:click="toggleStreakModal" class="button dashboard__modal-button">Got it</button>
        </div>
    @endif

    @if($diamondsModal)
        <div class="modal-backdrop" wire:click="toggleDiamondsModal"></div>
        <div class="dashboard__modal dashboard__modal--centered">
            <i class="icon-diamond" style="font-size:2.5rem; color:#9B6DFF; margin-bottom:12px;"></i>
            <h2 style="font-size:1.25rem; margin-bottom:8px;">{{ $diamonds }} diamonds</h2>
            <p class="dashboard__modal-text">Complete workouts and log heavier lifts to earn more diamonds. Spend them in the Shop!</p>
            <button wire:click="toggleDiamondsModal" class="button dashboard__modal-button">Got it</button>
        </div>
    @endif

    @if($animalsModal)
        <div class="modal-backdrop" wire:click="toggleAnimalsModal"></div>
        <div class="dashboard__modal dashboard__modal--centered">
            <i class="icon-pets" style="font-size:2.5rem; color:#4F8EF7; margin-bottom:12px;"></i>
            <h2 style="font-size:1.25rem; margin-bottom:8px;">Impressive lift!</h2>
            <p class="dashboard__modal-text">Last session you lifted the equivalent of <b>{{ $animalComparison }}</b>. Keep pushing!</p>
            <button wire:click="toggleAnimalsModal" class="button dashboard__modal-button">Got it</button>
        </div>
    @endif

    @if($weightsModal)
        <div class="modal-backdrop" wire:click="toggleWeightsModal"></div>
        <div class="dashboard__modal dashboard__modal--centered">
            <i class="icon-weight" style="font-size:2.5rem; color:#4F8EF7; margin-bottom:12px;"></i>
            <h2 style="font-size:1.25rem; margin-bottom:8px;">{{ $lastLiftedWeight }} kg lifted</h2>
            <p class="dashboard__modal-text">That's your most recent session total. Aim to beat it next time!</p>
            <button wire:click="toggleWeightsModal" class="button dashboard__modal-button">Got it</button>
        </div>
    @endif

    @if($moreDiamonds)
        <div class="modal-backdrop" wire:click="toggleMoreDiamonds"></div>
        <div class="dashboard__modal dashboard__modal--centered">
            <i class="icon-diamond-plus" style="font-size:2.5rem; color:#9B6DFF; margin-bottom:12px;"></i>
            <h2 style="font-size:1.25rem; margin-bottom:8px;">Earn more diamonds</h2>
            <p class="dashboard__modal-text">Add heavier weights or more exercises to your sessions. The harder you train, the more you earn.</p>
            <button wire:click="toggleMoreDiamonds" class="button dashboard__modal-button">Let's go!</button>
        </div>
    @endif
</div>
