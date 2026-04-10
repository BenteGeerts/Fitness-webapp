<div class="training__exercise">
    @if(isset($exercise))
        {{-- Progress indicator --}}
        <div class="training__progress">
            <div class="training__progress-header">
                <span class="training__progress-label">
                    Exercise {{ $currentIndex + 1 }} of {{ count($exercises) }}
                </span>
                <a href="{{ route('training') }}" class="training__progress-stop">Stop</a>
            </div>
            {{-- Progress bar --}}
            <div class="training__progress-bar">
                <div class="training__progress-fill" style="width:{{ round((($currentIndex + 1) / count($exercises)) * 100) }}%;"></div>
            </div>
        </div>

        {{-- Exercise card --}}
        <div class="program program--full-width">
            <div class="program__drawing-container">
                <img class="program__drawing" src="/images/drawing__running.svg" alt="{{ $exercise->name }}">
            </div>
            <div class="program__text-container">
                <p class="program__title">{{ $exercise->name }}</p>
                <div class="program__icons">
                    <div class="program__icon-wrapper">
                        <i class="icon-diamond program__icon program__icon--purple"></i>
                        <p class="program__icon-text">{{ $exercise->diamonds }} pts</p>
                    </div>
                    @if(isset($prs[$exercise->id]))
                        <div class="program__icon-wrapper">
                            <i class="icon-weight program__icon program__icon--green"></i>
                            <p class="program__icon-text">PR: {{ $prs[$exercise->id] }} kg</p>
                        </div>
                    @endif
                </div>
            </div>
        </div>

        {{-- Set logging --}}
        <div class="training__input-wrapper training__input-wrapper--full">
            <div class="training__set-header">
                <span>#</span>
                <span>Reps</span>
                <span></span>
                <span>Weight (kg)</span>
                <span></span>
            </div>

            @foreach($existingSets[$exercise->id] ?? [] as $index => $set)
                <div class="training__set-row">
                    <span class="training__set-number">{{ $index + 1 }}</span>
                    <input class="training__input-field" type="number" placeholder="0"
                           wire:model="existingSets.{{ $exercise->id }}.{{ $index }}.reps">
                    <span class="training__set-separator">×</span>
                    <input class="training__input-field" type="number" placeholder="0"
                           wire:model="existingSets.{{ $exercise->id }}.{{ $index }}.weight">
                    <button class="button button--tertiary training__set-remove"
                            wire:click="removeSet('{{ $exercise->id }}', {{ $index }})">
                        <i class="icon-delete"></i>
                    </button>
                </div>
            @endforeach

            <button class="button button--secondary training__input-button training__input-button--under"
                    wire:click="addSet('{{ $exercise->id }}')">
                + Add set
            </button>
        </div>

        {{-- Navigation --}}
        <div class="training__buttons training__buttons--no-spacing training__buttons--full">
            @if($currentIndex > 0)
                <button wire:click="previousExercise" class="button button--secondary">← Back</button>
            @endif

            @if($currentIndex != count($exercises) - 1)
                <button wire:click="nextExercise" class="button">Next →</button>
            @else
                <button wire:click="save" class="button">Finish workout 🎉</button>
            @endif
        </div>

    @else
        <div class="training__empty--play">
            <i class="icon-weight training__empty-icon"></i>
            <p class="training__empty-message">No exercises in this program.</p>
            <a class="button button--secondary" href="{{ route('training.detail', ['slug' => $training->slug]) }}">
                Go back
            </a>
        </div>
    @endif
</div>
