<div>
    @forelse ($exercises as $key => $exercise)
        @if ($key % 3 === 0)
            <div class="row">
                @endif
                <div class="col-md-12 col-lg-4">
                    <!-- Exercise details -->
                    <div class="program">
                        <!-- Program drawing -->
                        <div class="program__drawing-container">
                            <img class="program__drawing" src="/images/drawing__running.svg" alt="">
                        </div>
                        <!-- Program text -->
                        <div class="program__text-container">
                            <p class="program__title">{{$exercise->name}}</p>
                            <div class="program__icons">
                                <div class="program__icon-wrapper">
                                    <i class="icon-diamond program__icon"></i>
                                    <p class="program__icon-text">{{$exercise->diamonds}}</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Existing sets -->
                    <div class="training__input-wrapper">
                        @foreach($existingSets[$exercise->id] ?? [] as $index => $set)
                            <div class="training__input">
                                <input class="training__input-field" type="number" placeholder="Reps"
                                       wire:model="existingSets.{{ $exercise->id }}.{{ $index }}.reps">
                                <span>X</span>
                                <input class="training__input-field" type="number" placeholder="Weight"
                                       wire:model="existingSets.{{ $exercise->id }}.{{ $index }}.weight">
                                <span>KG</span>
                                <button class="button button--tertiary training__input-button"
                                        wire:click="removeSet('{{ $exercise->id }}', {{ $index }})">Remove
                                </button>
                            </div>
                        @endforeach
                    </div>
                    <!-- New sets -->
                    <div class="training__input-wrapper">
                        @foreach ($sets[$exercise->id] ?? [] as $index => $set)
                            <div class="training__input">
                                <input class="training__input-field" type="number"
                                       wire:model="sets.{{ $exercise->id }}.{{ $index }}.reps" placeholder="Reps">
                                <span>X</span>
                                <input class="training__input-field" type="number"
                                       wire:model="sets.{{ $exercise->id }}.{{ $index }}.weight" placeholder="Weight">
                                <span>KG</span>
                                <button class="button button--tertiary training__input-button"
                                        wire:click="removeSet('{{ $exercise->id }}', {{ $index }})">Remove
                                </button>
                            </div>
                        @endforeach
                        <div>
                            <button class="button training__input-button training__input-button--under"
                                    wire:click="addSet('{{ $exercise->id }}')">Add Set
                            </button>
                        </div>
                    </div>
                </div>
                @if (($key + 1) % 3 === 0 || $loop->last)
            </div>
        @endif
    @empty
        <p>No exercises yet</p>
    @endforelse

    <div class="training__buttons">
        <button wire:click="save" class="button">Save</button>
    </div>
</div>
