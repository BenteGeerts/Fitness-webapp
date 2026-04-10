<section class="training">
    <div class="row justify-content-center">
        <div class="col-md-12 col-lg-9 col-xl-10">

            <div class="page__heading page__heading--space">
                <div class="page__heading">
                    <a class="no-underline" href="{{ route('training') }}">
                        <i class="icon-back page__heading-icon"></i>
                    </a>
                    <h1>{{ $training->name }}</h1>
                </div>
                @if($training->id > 6)
                    <a wire:click="toggleModal" class="page__heading-icon" title="Delete program">
                        <i class="icon-delete"></i>
                    </a>
                @endif
            </div>

            <div class="training__exercises-wrapper">
                @forelse ($exercises as $key => $exercise)
                    @if ($key % 3 === 0)
                        <div class="row">
                    @endif

                    <div class="col-md-12 col-lg-4">
                        <div class="program">
                            <div class="program__drawing-container">
                                <img class="program__drawing" src="/images/drawing__running.svg"
                                     alt="{{ $exercise->name }}">
                            </div>
                            <div class="program__text-container">
                                <a href="{{ route('exercise.detail', ['slug' => $exercise->slug]) }}">
                                    <p class="program__title">{{ $exercise->name }}</p>
                                </a>
                                <div class="program__icons">
                                    <div class="program__icon-wrapper">
                                        <i class="icon-diamond program__icon program__icon--purple"></i>
                                        <p class="program__icon-text">{{ $exercise->diamonds }}</p>
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
                        <div class="training__input-wrapper">
                            @php
                                $allSets = array_merge(
                                    array_values($existingSets[$exercise->id] ?? []),
                                    array_values($sets[$exercise->id] ?? [])
                                );
                            @endphp

                            @if(count($allSets) > 0)
                                <div class="training__set-header">
                                    <span>#</span>
                                    <span>Reps</span>
                                    <span></span>
                                    <span>Weight (kg)</span>
                                    <span></span>
                                </div>
                            @endif

                            {{-- Existing sets --}}
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

                            {{-- New sets --}}
                            @foreach ($sets[$exercise->id] ?? [] as $index => $set)
                                @php $displayIndex = count($existingSets[$exercise->id] ?? []) + $index; @endphp
                                <div class="training__set-row">
                                    <span class="training__set-number">{{ $displayIndex + 1 }}</span>
                                    <input class="training__input-field" type="number" placeholder="0"
                                           wire:model="sets.{{ $exercise->id }}.{{ $index }}.reps">
                                    <span class="training__set-separator">×</span>
                                    <input class="training__input-field" type="number" placeholder="0"
                                           wire:model="sets.{{ $exercise->id }}.{{ $index }}.weight">
                                    <button class="button button--tertiary training__set-remove"
                                            wire:click="removeSet('{{ $exercise->id }}', {{ $index }})">
                                        <i class="icon-delete"></i>
                                    </button>
                                </div>
                            @endforeach

                            <div>
                                <button class="button button--secondary training__input-button training__input-button--under"
                                        wire:click="addSet('{{ $exercise->id }}')">
                                    + Add set
                                </button>
                            </div>
                        </div>
                    </div>

                    @if (($key + 1) % 3 === 0 || $loop->last)
                        </div>
                    @endif
                @empty
                    <div class="training__empty">
                        <i class="icon-weight training__empty-icon"></i>
                        <p>No exercises in this program yet.</p>
                    </div>
                @endforelse

                @if(count($exercises) > 0)
                    <div class="training__play-area">
                        <a class="play-button__wrapper" href="{{ route('training.play', ['slug' => $training->slug]) }}">
                            <div class="play-button__circle pulse"></div>
                            <div class="play-button__circle">
                                <svg class="play-button__symbol" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 100 100">
                                    <polygon points="40,30 65,50 40,70"></polygon>
                                </svg>
                            </div>
                        </a>
                        <p class="training__play-text">Start workout</p>
                    </div>
                @endif

                <div class="training__buttons training__buttons--small-spacing">
                    <button wire:click="save" class="button button--medium">Save changes</button>
                </div>
            </div>

            @if($showModal)
                <div class="modal-backdrop" wire:click="toggleModal"></div>
                <div class="training__modal">
                    <i class="icon-delete training__modal-icon"></i>
                    <span class="training__modal-text">Delete <b>{{ $training->name }}</b>? This cannot be undone.</span>
                    <div class="training__modal-actions">
                        <button wire:click="delete" class="button button--tertiary">Yes, delete</button>
                        <button wire:click="toggleModal" class="button button--secondary">Cancel</button>
                    </div>
                </div>
            @endif

        </div>
    </div>
</section>
