<div>
    {{-- Badge row --}}
    <div class="profile__badges">
        <div class="profile__badge {{ !$firstModalConditionChecked ? 'profile__badge--locked' : '' }}"
             title="{{ $firstModalConditionChecked ? 'First Training' : 'Locked' }}">
            <img src="/images/badgeOne.png" alt="First training badge">
            <i class="icon-lock profile__badge-lock"></i>
        </div>
        <div class="profile__badge {{ !$secondModalConditionChecked ? 'profile__badge--locked' : '' }}"
             title="{{ $secondModalConditionChecked ? '100 Trainings' : 'Locked' }}">
            <img src="/images/badgeTwo.png" alt="100 trainings badge">
            <i class="icon-lock profile__badge-lock"></i>
        </div>
        <div class="profile__badge {{ !$thirdModalConditionChecked ? 'profile__badge--locked' : '' }}"
             title="{{ $thirdModalConditionChecked ? '10k Diamonds' : 'Locked' }}">
            <img src="/images/badgeThree.png" alt="10k diamonds badge">
            <i class="icon-lock profile__badge-lock"></i>
        </div>
        <div class="profile__badge {{ !$fourthModalConditionChecked ? 'profile__badge--locked' : '' }}"
             title="{{ $fourthModalConditionChecked ? 'First Friend' : 'Locked' }}">
            <img src="/images/badgeFour.png" alt="First friend badge">
            <i class="icon-lock profile__badge-lock"></i>
        </div>
    </div>

    {{-- Challenges --}}
    <h3 class="h3 profile__subtitle profile__subtitle--spaced">Challenges</h3>

    <div class="profile__challenges">
        <div wire:click="toggleModals('modalOne')" class="profile__challenge">
            <img class="profile__challenge-badge" src="/images/badgeOne.png" alt="badge">
            <p class="profile__challenge-title">First training</p>
        </div>
        <div wire:click="toggleModals('modalTwo')" class="profile__challenge">
            <img class="profile__challenge-badge" src="/images/badgeTwo.png" alt="badge">
            <p class="profile__challenge-title">100 trainings</p>
        </div>
        <div wire:click="toggleModals('modalThree')" class="profile__challenge">
            <img class="profile__challenge-badge" src="/images/badgeThree.png" alt="badge">
            <p class="profile__challenge-title">10,000 diamonds</p>
        </div>
        <div wire:click="toggleModals('modalFour')" class="profile__challenge">
            <img class="profile__challenge-badge" src="/images/badgeFour.png" alt="badge">
            <p class="profile__challenge-title">Add a friend</p>
        </div>
    </div>

    {{-- Challenge modals --}}
    @if($modalOne)
        <div class="modal-backdrop" wire:click="toggleModals('modalOne')"></div>
        <div class="profile__modal">
            <img src="/images/badgeOne.png" alt="badge" class="profile__modal-badge {{ !$firstModalConditionChecked ? 'profile__modal-badge--locked' : '' }}">
            <p class="profile__modal-text">
                @if($firstModalConditionChecked)
                    Badge unlocked! You've completed your first training. 💪
                @else
                    Do <b>1 training</b> to unlock this badge.<br>
                    <span class="profile__modal-hint">You have {{ $currentTrainings }} workouts logged.</span>
                @endif
            </p>
            <button wire:click="toggleModals('modalOne')" class="button profile__modal-button">Got it</button>
        </div>
    @endif

    @if($modalTwo)
        <div class="modal-backdrop" wire:click="toggleModals('modalTwo')"></div>
        <div class="profile__modal">
            <img src="/images/badgeTwo.png" alt="badge" class="profile__modal-badge {{ !$secondModalConditionChecked ? 'profile__modal-badge--locked' : '' }}">
            <p class="profile__modal-text">
                @if($secondModalConditionChecked)
                    Badge unlocked! You're a true athlete with 100 sessions! 🏆
                @else
                    Complete <b>100 trainings</b> to unlock this badge.<br>
                    <span class="profile__modal-hint">Progress: {{ $currentTrainings }} / 100</span>
                @endif
            </p>
            <button wire:click="toggleModals('modalTwo')" class="button profile__modal-button">Got it</button>
        </div>
    @endif

    @if($modalThree)
        <div class="modal-backdrop" wire:click="toggleModals('modalThree')"></div>
        <div class="profile__modal">
            <img src="/images/badgeThree.png" alt="badge" class="profile__modal-badge {{ !$thirdModalConditionChecked ? 'profile__modal-badge--locked' : '' }}">
            <p class="profile__modal-text">
                @if($thirdModalConditionChecked)
                    Badge unlocked! 10,000 diamonds earned! 💎
                @else
                    Earn <b>10,000 diamonds</b> to unlock this badge.<br>
                    <span class="profile__modal-hint">Progress: {{ number_format($currentDiamonds) }} / 10,000</span>
                @endif
            </p>
            <button wire:click="toggleModals('modalThree')" class="button profile__modal-button">Got it</button>
        </div>
    @endif

    @if($modalFour)
        <div class="modal-backdrop" wire:click="toggleModals('modalFour')"></div>
        <div class="profile__modal">
            <img src="/images/badgeFour.png" alt="badge" class="profile__modal-badge {{ !$fourthModalConditionChecked ? 'profile__modal-badge--locked' : '' }}">
            <p class="profile__modal-text">
                @if($fourthModalConditionChecked)
                    Badge unlocked! You've made your first friend! 🤝
                @else
                    Add <b>1 friend</b> to unlock this badge.<br>
                    <span class="profile__modal-hint">You have {{ $currentFriends }} friends.</span>
                @endif
            </p>
            <button wire:click="toggleModals('modalFour')" class="button profile__modal-button">Got it</button>
        </div>
    @endif
</div>
