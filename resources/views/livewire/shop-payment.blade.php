<div class="row">

    {{-- Streak Freeze --}}
    <div class="col-md-12 col-lg-6">
        <div class="shop__item {{ $streakFreezeActive ? 'shop__item--streak-active' : '' }}">
            <div class="shop__item-wrapper">
                <i class="icon-fire shop__item-icon shop__item-icon--orange"></i>
            </div>

            <div class="shop__item-text">
                <p class="shop__item-title">Streak Freeze</p>
                <p class="shop__item-paragraph">
                    Protects your streak for one full day of inactivity. Use it before you miss a gym day.
                </p>

                @if($streakFreezeActive)
                    <div class="shop__active-badge">
                        <i class="icon-fire"></i>
                        Active
                    </div>
                @else
                    <a class="shop__price-wrapper"
                       wire:click="showModal('showStreakModal')">
                        <i class="icon-diamond shop__price-icon"></i>
                        <span class="shop__price">9,999</span>
                    </a>
                @endif
            </div>
        </div>

        @if (session()->has('successPowerUpOne'))
            <div class="error error--green">{{ session('successPowerUpOne') }}</div>
        @endif
        @if (session()->has('errorOne'))
            <div class="error">{{ session('errorOne') }}</div>
        @endif
    </div>

    {{-- Double Points --}}
    <div class="col-md-12 col-lg-6">
        <div class="shop__item {{ $doubleDiamondsActive ? 'shop__item--diamonds-active' : '' }}">
            <div class="shop__item-wrapper">
                <i class="icon-diamond shop__item-icon shop__item-icon--red"></i>
            </div>

            <div class="shop__item-text">
                <p class="shop__item-title">Double Points</p>
                <p class="shop__item-paragraph">
                    Earn 2× diamonds on every workout for the next 24 hours. Stack with a heavy session.
                </p>

                @if($doubleDiamondsActive)
                    <div class="shop__active-badge shop__active-badge--purple">
                        <i class="icon-diamond"></i>
                        Active
                    </div>
                @else
                    <a class="shop__price-wrapper"
                       wire:click="showModal('showDoubleDiamondsModal')">
                        <i class="icon-diamond shop__price-icon"></i>
                        <span class="shop__price">9,999</span>
                    </a>
                @endif
            </div>
        </div>

        @if (session()->has('successPowerUpTwo'))
            <div class="error error--green">{{ session('successPowerUpTwo') }}</div>
        @endif
        @if (session()->has('errorTwo'))
            <div class="error">{{ session('errorTwo') }}</div>
        @endif
    </div>

    {{-- Streak Freeze Modal --}}
    @if($showStreakModal)
        <div class="modal-backdrop" wire:click="hideModal('showStreakModal')"></div>
        <div class="shop__modal">
            <i class="icon-fire shop__modal-icon shop__modal-icon--orange"></i>
            <h2 class="shop__modal-title">Buy Streak Freeze?</h2>
            <p class="shop__modal-text">
                This will cost <b>9,999 diamonds</b> and protect your streak for one missed day.
            </p>
            <div class="shop__modal-buttons">
                <button wire:click="streakFreeze" class="button">Confirm</button>
                <button wire:click="hideModal('showStreakModal')" class="button button--secondary">Cancel</button>
            </div>
        </div>
    @endif

    {{-- Double Diamonds Modal --}}
    @if($showDoubleDiamondsModal)
        <div class="modal-backdrop" wire:click="hideModal('showDoubleDiamondsModal')"></div>
        <div class="shop__modal">
            <i class="icon-diamond shop__modal-icon shop__modal-icon--purple"></i>
            <h2 class="shop__modal-title">Buy Double Points?</h2>
            <p class="shop__modal-text">
                This will cost <b>9,999 diamonds</b> and double your earnings for the next 24 hours.
            </p>
            <div class="shop__modal-buttons">
                <button wire:click="doublePoints" class="button">Confirm</button>
                <button wire:click="hideModal('showDoubleDiamondsModal')" class="button button--secondary">Cancel</button>
            </div>
        </div>
    @endif

</div>
