<div class="row">

    {{-- Streak Freeze --}}
    <div class="col-md-12 col-lg-6">
        <div class="shop__item" style="{{ $streakFreezeActive ? 'border-color: rgba(57,217,138,0.3);' : '' }}">
            <div class="shop__item-wrapper" style="flex-shrink:0; margin-right:16px;">
                <i class="icon-fire shop__item-icon shop__item-icon--orange"></i>
            </div>

            <div class="shop__item-text" style="flex:1;">
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
                    <a class="shop__price-wrapper" style="cursor:pointer;"
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
        <div class="shop__item" style="{{ $doubleDiamondsActive ? 'border-color: rgba(155,109,255,0.3);' : '' }}">
            <div class="shop__item-wrapper" style="flex-shrink:0; margin-right:16px;">
                <i class="icon-diamond shop__item-icon shop__item-icon--red"></i>
            </div>

            <div class="shop__item-text" style="flex:1;">
                <p class="shop__item-title">Double Points</p>
                <p class="shop__item-paragraph">
                    Earn 2× diamonds on every workout for the next 24 hours. Stack with a heavy session.
                </p>

                @if($doubleDiamondsActive)
                    <div class="shop__active-badge" style="background:rgba(155,109,255,0.15); border-color:rgba(155,109,255,0.3); color:#9B6DFF;">
                        <i class="icon-diamond"></i>
                        Active
                    </div>
                @else
                    <a class="shop__price-wrapper" style="cursor:pointer;"
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
            <i class="icon-fire" style="font-size:2.5rem; color:#FF8B3D; margin-bottom:12px;"></i>
            <h2 style="font-size:1.125rem; margin-bottom:8px;">Buy Streak Freeze?</h2>
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
            <i class="icon-diamond" style="font-size:2.5rem; color:#9B6DFF; margin-bottom:12px;"></i>
            <h2 style="font-size:1.125rem; margin-bottom:8px;">Buy Double Points?</h2>
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
