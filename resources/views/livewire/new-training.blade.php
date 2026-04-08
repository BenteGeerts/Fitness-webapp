<section class="new-training">
    <div class="row justify-content-center">
        <div class="col-md-12 col-lg-10">

            <div class="page__heading">
                <a class="no-underline" href="{{ route('training') }}">
                    <i class="icon-back page__heading-icon"></i>
                </a>
                <h1>New Program</h1>
            </div>

            <div class="col-md-12 col-lg-6 new-training__col">
                <div class="form__field">
                    <label class="form__label" for="trainingName">Program name</label>
                    <input wire:model="trainingName" name="trainingName" id="trainingName"
                           class="form__input-field"
                           type="text" placeholder="e.g. Push Day A">
                    @if($errors->has('trainingName'))
                        <span class="error">{{ $errors->first('trainingName') }}</span>
                    @endif
                </div>
            </div>

            <div class="new-training__diamonds">
                <i class="icon-diamond new-training__diamonds-icon"></i>
                <span class="new-training__diamonds-text">+{{ $diamonds }} diamonds on completion</span>
            </div>

            <div class="new-training__exercises">
                <h3 class="new-training__exercises-title">Exercises</h3>
                <span class="new-training__exercises-number">
                    {{ isset($exercises) ? count($exercises) : 0 }}
                </span>
            </div>

            @if(isset($exercises) && count($exercises) > 0)
                @foreach ($exercises as $key => $exercise)
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
                                <p class="program__title">{{ $exercise->name }}</p>
                                <div class="program__icons">
                                    <div class="program__icon-wrapper">
                                        <i class="icon-diamond program__icon program__icon--purple"></i>
                                        <p class="program__icon-text">{{ $exercise->diamonds }}</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    @if (($key + 1) % 3 === 0 || $loop->last)
                        </div>
                    @endif
                @endforeach

            @else
                <div class="new-training__empty">
                    <i class="icon-weight new-training__empty-icon"></i>
                    <p class="new-training__empty-text">No exercises added yet</p>
                    @if ($errors->has('noExercises'))
                        <div class="error new-training__empty-error">{{ $errors->first('noExercises') }}</div>
                    @endif
                </div>
            @endif

            <div class="new-training__buttons">
                <a wire:click="setName" class="button">+ Add exercises</a>
            </div>

            <div class="new-training__buttons new-training__buttons--under">
                <a wire:click="save" class="button button--medium">Save program</a>
                <a wire:click="cancel" class="button button--secondary button--medium">Cancel</a>
            </div>

        </div>
    </div>
</section>
