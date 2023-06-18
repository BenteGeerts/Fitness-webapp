<section class="new-training">
    <div class="row justify-content-center">
        <div class="col-md-12 col-lg-10">
            <div class="page__heading">
                <h1>Training</h1>
                <img class="page__profile-img" src="/images/profileimg.png" alt="">
            </div>

            <h2 class="h3 new-training__title">Create a new program</h2>

            <div class="col-md-12 col-lg-4">
                <div class="form__field">
                    <label class="form__label" for="trainingName">Training name</label>
                    <input wire:model="trainingName" name="trainingName" id="trainingName" class="form__input-field form__input-field--no-background"
                           type="text" placeholder="Enter a name for this training">
                    @if($errors->has('trainingName'))
                        <span class="error">{{ $errors->first('trainingName') }}</span>
                    @endif
                </div>
            </div>

            <div class="new-training__diamonds">
                <i class="icon-diamond new-training__diamonds-icon"></i>
                <span class="new-training__diamonds-text">+{{$diamonds}}</span>
            </div>

            <div class="new-training__exercises">
                <h3 class="new-training__exercises-title">Exercises</h3>
                <span class="new-training__exercises-number">{{isset($exercises) ? count($exercises) : 0}}</span>
            </div>


            @if(isset($exercises))
                @foreach ($exercises as $key => $exercise)
                    @if ($key % 3 === 0)
                        <div class="row">
                            @endif
                            <div class="col-md-12 col-lg-4">
                                <div class="program">
                                    <div class="program__drawing-container">
                                        <img class="program__drawing" src="/images/drawing__running.svg" alt="">
                                    </div>

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
                            </div>

                            @if (($key + 1) % 3 === 0 || $loop->last)
                        </div>
                    @endif
                @endforeach

            @else
                <p>No exercises yet</p>
            @endif

            <div class="new-training__buttons">
                <a wire:click="setName" class="button">Add more</a>
            </div>

            <div class="new-training__buttons new-training__buttons--under">
                <a wire:click="save" class="button button--medium">Save</a>
                <a wire:click="cancel" class="button button--secondary button--medium">Cancel</a>
            </div>
        </div>
    </div>
</section>
