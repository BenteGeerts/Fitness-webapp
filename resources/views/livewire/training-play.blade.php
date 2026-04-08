<div class="training__exercise">
    @if(isset($exercise))
        {{-- Progress indicator --}}
        <div style="width:100%; margin-bottom:16px;">
            <div style="display:flex; justify-content:space-between; align-items:center; margin-bottom:8px;">
                <span style="font-size:0.8125rem; color:#8B8BA8; font-weight:600; letter-spacing:0.06em; text-transform:uppercase;">
                    Exercise {{ $currentIndex + 1 }} of {{ count($exercises) }}
                </span>
                <a href="{{ route('training') }}" style="font-size:0.8125rem; color:#FF4757;">Stop</a>
            </div>
            {{-- Progress bar --}}
            <div style="height:3px; background:#222234; border-radius:2px; overflow:hidden;">
                <div style="height:100%; width:{{ round((($currentIndex + 1) / count($exercises)) * 100) }}%; background:#CAFF00; border-radius:2px; transition:width 0.4s ease;"></div>
            </div>
        </div>

        {{-- Exercise card --}}
        <div class="program" style="width:100%;">
            <div class="program__drawing-container">
                <img class="program__drawing" src="/images/drawing__running.svg" alt="{{ $exercise->name }}">
            </div>
            <div class="program__text-container">
                <p class="program__title">{{ $exercise->name }}</p>
                <div class="program__icons">
                    <div class="program__icon-wrapper">
                        <i class="icon-diamond program__icon" style="color:#9B6DFF;"></i>
                        <p class="program__icon-text">{{ $exercise->diamonds }} pts</p>
                    </div>
                </div>
            </div>
        </div>

        {{-- Set logging --}}
        <div class="training__input-wrapper" style="width:100%;">
            <div class="training__set-header">
                <span>#</span>
                <span>Reps</span>
                <span></span>
                <span>Weight (kg)</span>
            </div>

            @foreach($existingSets[$exercise->id] ?? [] as $index => $set)
                <div class="training__set-row">
                    <span class="training__set-number">{{ $index + 1 }}</span>
                    <input class="training__input-field" type="number" placeholder="0"
                           wire:model="existingSets.{{ $exercise->id }}.{{ $index }}.reps">
                    <span style="color:#52526A; text-align:center;">×</span>
                    <input class="training__input-field" type="number" placeholder="0"
                           wire:model="existingSets.{{ $exercise->id }}.{{ $index }}.weight">
                </div>
            @endforeach

            <button class="button button--secondary training__input-button training__input-button--under"
                    wire:click="addSet('{{ $exercise->id }}')">
                + Add set
            </button>
        </div>

        {{-- Navigation --}}
        <div class="training__buttons training__buttons--no-spacing" style="width:100%;">
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
        <div style="text-align:center; color:#8B8BA8; padding: 60px 0;">
            <i class="icon-weight" style="font-size:3rem; display:block; margin-bottom:16px; color:#52526A;"></i>
            <p style="margin-bottom:20px;">No exercises in this program.</p>
            <a class="button button--secondary" href="{{ route('training.detail', ['slug' => $training->slug]) }}">
                Go back
            </a>
        </div>
    @endif
</div>
