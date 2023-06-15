<div class="row">
    <div class="col-md-12 col-lg-6">
        <div class="shop__item">
            <div class="shop__item-wrapper">
                <i class="icon-fire shop__item-icon shop__item-icon--orange"></i>
            </div>

            <div class="shop__item-text">
                <p class="shop__item-title">Streak freeze</p>
                <p class="shop__item-paragraph">Streak Freeze allows your streak to
                    remain in place for one full day of inactivity.
                </p>

                <a class="shop__price-wrapper">
                    @if(!$streakFreezeActive)
                        <i class="icon-diamond shop__price-icon"></i>
                        <span wire:click="showModal('showStreakModal')" class="shop__price">9999</span>
                    @endif

                    @if($streakFreezeActive)
                        <span class="shop__price">Active</span>
                    @endif
                </a>
            </div>
        </div>
        @if (session()->has('successPowerUpOne'))
            <div class="error error--green">
                {{ session('successPowerUpOne') }}
            </div>
        @endif
        @if (session()->has('errorOne'))
            <div class="error">
                {{ session('errorOne') }}
            </div>
        @endif
    </div>
    <div class="col-md-12 col-lg-6">
        <div class="shop__item shop__item--bottom">
            <div class="shop__item-wrapper">
                <i class="icon-diamond shop__item-icon shop__item-icon--red"></i>
            </div>

            <div class="shop__item-text">
                <p class="shop__item-title">Double points</p>
                <p class="shop__item-paragraph">Double points allows you to get
                    double points for the next 24 hours.
                </p>

                <a class="shop__price-wrapper">
                    @if(!$doubleDiamondsActive)
                        <i class="icon-diamond shop__price-icon"></i>
                        <span wire:click="showModal('showDoubleDiamondsModal')" class="shop__price">9999</span>
                    @endif

                    @if($doubleDiamondsActive)
                        <span class="shop__price">Active</span>
                    @endif
                </a>
            </div>
        </div>
        @if (session()->has('successPowerUpTwo'))
            <div class="error error--green">
                {{ session('successPowerUpTwo') }}
            </div>
        @endif
        @if (session()->has('errorTwo'))
            <div class="error">
                {{ session('errorTwo') }}
            </div>
        @endif
    </div>

    @if($showStreakModal)
        <div class="shop__modal">
            <span class="shop__modal-text">Do you wanna spend 9999 diamonds for this streak freeze?</span>
            <div class="shop__modal-buttons">
                <button wire:click="streakFreeze" class="button">Yes</button>
                <button wire:click="hideModal('showStreakModal')" class="button button--tertiary">No</button>
            </div>
        </div>
    @endif

    @if($showDoubleDiamondsModal)
        <div class="shop__modal">
            <span class="shop__modal-text">Do you wanna spend 9999 diamonds to get double diamonds?</span>
            <div class="shop__modal-buttons">
                <button wire:click="doublePoints" class="button">Yes</button>
                <button wire:click="hideModal('showDoubleDiamondsModal')" class="button button--tertiary">No</button>
            </div>
        </div>
    @endif
</div>
