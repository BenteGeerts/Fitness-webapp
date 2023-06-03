<section class="setup">
    @if($currentPage == 1)
        <div class="setup-page">
            <div class="setup__nav">
                <p class="setup__nav-page">1 of 6</p>
            </div>

            <div class="row justify-content-center">
                <div class="col-md-12 col-lg-4">
                    <div class="setup__wrapper">
                        <div class="setup__heading">
                            <h1 class="setup__heading-title">What's your weight?</h1>
                            <p class="setup__heading-subtitle">This is used to setup recommendations just for you.</p>
                        </div>

                        <div class="setup__input-wrapper">
                            <div class="setup__number-picker" data-number-picker="1">
                                <button class="setup__number-button" data-number-decrement>-</button>
                                <input wire:model="weight" class="setup__number-input" name="weight" id="weight"
                                       type="number" value="30"
                                       min="30" max="250" data-number-input="1">
                                <button class="setup__number-button" data-number-increment>+</button>
                            </div>
                            <label for="weight">KG</label>
                        </div>

                        <div>
                            <p class="setup__footer">You can change this any time later</p>
                            <a wire:click="next" class="button button--big">Continue</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @endif

    @if($currentPage == 2)
        <div class="setup-page">
            <div class="setup__nav">
                <i wire:click="previous" class="icon-back setup__back" data-page-back></i>
                <p class="setup__nav-page">2 of 6</p>
            </div>

            <div class="row justify-content-center">
                <div class="col-md-12 col-lg-4">
                    <div class="setup__wrapper">
                        <div class="setup__heading">
                            <h1 class="setup__heading-title">What's your height?</h1>
                            <p class="setup__heading-subtitle">This is used to setup recommendations just for you.</p>
                        </div>

                        <div class="setup__input-wrapper">
                            <div class="setup__number-picker" data-number-picker="2">
                                <button class="setup__number-button" data-number-decrement>-</button>
                                <input wire:model="height" class="setup__number-input" name="height" id="height"
                                       type="number" value="50"
                                       min="50" max="250" data-number-input="2">
                                <button class="setup__number-button" data-number-increment>+</button>
                            </div>
                            <label for="height">CM</label>
                        </div>

                        <div>
                            <p class="setup__footer">You can change this any time later</p>
                            <a wire:click="next" class="button button--big" data-page="2">Continue</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @endif

    @if($currentPage == 3)
        <div class="setup-page" data-show-page="3">
            <div class="setup__nav">
                <i wire:click="previous" class="icon-back setup__back" data-page-back></i>
                <p class="setup__nav-page">3 of 6</p>
            </div>

            <div class="row justify-content-center">
                <div class="col-md-12 col-lg-4">
                    <div class="setup__wrapper">
                        <div class="setup__heading">
                            <h1 class="setup__heading-title">What's your age?</h1>
                            <p class="setup__heading-subtitle">This is used to setup recommendations just for you.</p>
                        </div>

                        <div class="setup__input-wrapper">
                            <div class="setup__number-picker" data-number-picker="3">
                                <button class="setup__number-button" data-number-decrement>-</button>
                                <input wire:model="age" class="setup__number-input" name="age" id="age" type="number"
                                       value="20" min="10"
                                       max="110" data-number-input="3">
                                <button class="setup__number-button" data-number-increment>+</button>
                            </div>
                            <label for="age">y/o</label>
                        </div>

                        <div>
                            <p class="setup__footer">You can change this any time later</p>
                            <a wire:click="next" class="button button--big" data-page="3">Continue</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @endif

    @if($currentPage == 4)
        <div class="setup-page" data-show-page="4">
            <div class="setup__nav">
                <i wire:click="previous" class="icon-back setup__back" data-page-back></i>
                <p class="setup__nav-page">4 of 6</p>
            </div>

            <div class="row justify-content-center">
                <div class="col-md-12 col-lg-4">
                    <div class="setup__wrapper">
                        <div class="setup__heading">
                            <h1 class="setup__heading-title">Select your gender</h1>
                            <p class="setup__heading-subtitle">This is used to setup recommendations just for you.</p>
                        </div>

                        <div class="setup__select-wrapper">
                            <div class="setup__select">
                                <div class="select__item">
                                    <input class="select__item-input" type="radio" name="gender"
                                           value="female"
                                           id="female" data-gender-checkboxes>
                                    <label class="select__item-label" for="female">
                                        <div class="select__item-icon">
                                            <i class="icon-female"></i>
                                        </div>
                                        <div class="select__item-title">
                                            Female
                                        </div>
                                    </label>
                                </div>


                                <div class="select__item">
                                    <input wire:model="gender" class="select__item-input" type="radio" name="gender"
                                           value="male" id="male"
                                           data-gender-checkboxes>
                                    <label class="select__item-label" for="male">
                                        <div class="select__item-icon">
                                            <i class="icon-male"></i>
                                        </div>
                                        <div class="select__item-title">
                                            Male
                                        </div>
                                    </label>
                                </div>
                            </div>

                            <div class="setup__select">
                                <div class="select__item">
                                    <input wire:model="gender" class="select__item-input" type="radio" name="gender"
                                           value="x" id="x"
                                           data-gender-checkboxes>
                                    <label class="select__item-label" for="x">
                                        <div class="select__item-icon">
                                            <i class="icon-transgender"></i>
                                        </div>
                                        <div class="select__item-title">
                                            X
                                        </div>
                                    </label>
                                </div>


                                <div class="select__item">
                                    <input wire:model="gender" class="select__item-input" type="radio" name="gender"
                                           value="other" id="other"
                                           data-gender-checkboxes>
                                    <label class="select__item-label" for="other">
                                        <div class="select__item-icon">
                                            <i class="icon-other"></i>
                                        </div>
                                        <div class="select__item-title">
                                            Other
                                        </div>
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div>
                            @error('gender')
                            <div class="error">
                                <span class="error__message">{{ $message }}</span>
                            </div>
                            @enderror
                            <p class="setup__footer">You can change this any time later</p>
                            <a wire:click="next" class="button button--big" data-page="4">Continue</a>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    @endif


    @if($currentPage == 5)
        <div class="setup-page" data-show-page="5">
            <div class="setup__nav">
                <i wire:click="previous" class="icon-back setup__back" data-page-back></i>
                <p class="setup__nav-page">5 of 6</p>
            </div>

            <div class="row justify-content-center">
                <div class="col-md-12 col-lg-4">
                    <div class="setup__wrapper">
                        <div class="setup__heading">
                            <h1 class="setup__heading-title">Select your goal</h1>
                            <p class="setup__heading-subtitle">This is used to setup recommendations just for you.</p>
                        </div>

                        <div class="setup__goal-wrapper">
                            <div class="select__item select__item--big">
                                <input wire:model="goal" class="select__item-input" type="radio" name="goal"
                                       value="lose weight"
                                       id="lose weight" data-goal-checkboxes>
                                <label class="select__item-label select__item-label--big" for="lose weight">
                                    <div class="setup__goal-heading">
                                        <div class="select__item-icon select__item-icon--big">
                                            <i class="icon-weight-loss setup__goal-icon"></i>
                                        </div>
                                        <p class="setup__goal-title">Lose weight</p>
                                    </div>
                                    <div class="select__item-title select__item-title--big">
                                        <p>Check this box if your goal is to lose weight</p>
                                    </div>
                                </label>
                            </div>


                            <div class="select__item select__item--big">
                                <input wire:model="goal" class="select__item-input" type="radio" name="goal"
                                       value="gain weight"
                                       id="gain weight" data-goal-checkboxes>
                                <label class="select__item-label select__item-label--big" for="gain weight">
                                    <div class="setup__goal-heading">
                                        <div class="select__item-icon select__item-icon--big">
                                            <i class="icon-weight-gain setup__goal-icon"></i>
                                        </div>
                                        <p class="setup__goal-title">Gain weight</p>
                                    </div>
                                    <div class="select__item-title select__item-title--big">
                                        <p>Check this box if your goal is to gain weight</p>
                                    </div>
                                </label>
                            </div>


                            <div class="select__item select__item--big">
                                <input wire:model="goal" class="select__item-input" type="radio" name="goal"
                                       value="gain muscle"
                                       id="gain muscle" data-goal-checkboxes>
                                <label class="select__item-label select__item-label--big" for="gain muscle">
                                    <div class="setup__goal-heading">
                                        <div class="select__item-icon select__item-icon--big">
                                            <i class="icon-weight setup__goal-icon"></i>
                                        </div>
                                        <p class="setup__goal-title">Gain muscle</p>
                                    </div>
                                    <div class="select__item-title select__item-title--big">
                                        <p>Check this box if your goal is to gain muscle</p>
                                    </div>
                                </label>
                            </div>
                        </div>
                        <div>
                            @error('goal')
                            <div class="error">
                                <span class="error__message">{{ $message }}</span>
                            </div>
                            @enderror
                            <p class="setup__footer">You can change this any time later</p>
                            <a wire:click="next" class="button button--big" data-page="5">Continue</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @endif

    @if($currentPage == 6)
        <div class="setup-page" data-show-page="6">
            <div class="setup__nav">
                <i wire:click="previous" class="icon-back setup__back" data-page-back></i>
                <p class="setup__nav-page">6 of 6</p>
            </div>


            <div class="row justify-content-center">
                <div class="col-md-12 col-lg-4">
                    <div class="setup__wrapper">
                        <div class="setup__heading">
                            <h1 class="setup__heading-title">What is your lowest amount of gym visits per week?</h1>
                            <p class="setup__heading-subtitle">This is used to setup recommendations just for you.</p>
                        </div>

                        <div class="setup__input-wrapper">
                            <div class="setup__number-picker" data-number-picker="4">
                                <button class="setup__number-button" data-number-decrement>-</button>
                                <input wire:model="visits" class="setup__number-input" name="visits" id="visits"
                                       type="number" value="3" min="1"
                                       max="7" data-number-input="4">
                                <button class="setup__number-button" data-number-increment>+</button>
                            </div>
                            <label for="visits">visits per week</label>
                        </div>

                        <div>
                            <p class="setup__footer">You can change this any time later</p>
                            <a wire:click="finish" class="button button--big" data-setup-submit>Finish</a>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    @endif
</section>
