<div>
    <div class="profile__badges">
        <div class="profile__badge {{!$firstModalConditionChecked ? 'profile__badge--locked' : ''}}">
            <img src="/images/badgeOne.png" alt="">
            <i class="icon-lock profile__badge-lock"></i>
        </div>

        <div class="profile__badge {{!$secondModalConditionChecked ? 'profile__badge--locked' : ''}}">
            <img src="/images/badgeTwo.png" alt="">
            <i class="icon-lock profile__badge-lock"></i>
        </div>

        <div class="profile__badge {{!$thirdModalConditionChecked ? 'profile__badge--locked' : ''}}">
            <img src="/images/badgeThree.png" alt="">
            <i class="icon-lock profile__badge-lock"></i>
        </div>

        <div class="profile__badge {{!$fourthModalConditionChecked ? 'profile__badge--locked' : ''}}">
            <img src="/images/badgeFour.png" alt="">
            <i class="icon-lock profile__badge-lock"></i>
        </div>
    </div>

    <h3 class="h3 profile__subtitle">Challenges</h3>

    <div class="profile__challenges">
        <div wire:click="toggleModals('modalOne')" class="profile__challenge">
            <img class="profile__challenge-badge" src="/images/badgeOne.png" alt="">
            <p class="profile__challenge-title">Do your first training</p>
        </div>

        <div wire:click="toggleModals('modalTwo')" class="profile__challenge">
            <img class="profile__challenge-badge" src="/images/badgeTwo.png" alt="">
            <p class="profile__challenge-title">Do 100 trainings</p>
        </div>

        <div wire:click="toggleModals('modalThree')"  class="profile__challenge">
            <img class="profile__challenge-badge" src="/images/badgeThree.png" alt="">
            <p class="profile__challenge-title">Earn 10 000 diamonds</p>
        </div>

        <div wire:click="toggleModals('modalFour')" class="profile__challenge">
            <img class="profile__challenge-badge" src="/images/badgeFour.png" alt="">
            <p class="profile__challenge-title">Add your first friend</p>
        </div>
    </div>

    @if($modalOne)
        <div class="profile__modal">
            <p class="profile__modal-text">You currently did <b>{{$currentTrainings}} trainings</b>, you need to do <b>1 training</b> to unlock this badge!</p>
            <button wire:click="toggleModals('modalOne')" class="button profile__modal-button">Oke</button>
        </div>
    @endif

    @if($modalTwo)
        <div class="profile__modal">
            <p class="profile__modal-text">You currently did <b>{{$currentTrainings}} trainings</b>, you need to do <b>100 trainings</b> to unlock this badge!</p>
            <button wire:click="toggleModals('modalTwo')" class="button profile__modal-button">Oke</button>
        </div>
    @endif

    @if($modalThree)
        <div class="profile__modal">
            <p class="profile__modal-text">You currently earned <b>{{$currentDiamonds}} diamonds</b>, you need to have <b>10 000 diamonds</b> to unlock this badge!</p>
            <button wire:click="toggleModals('modalThree')" class="button profile__modal-button">Oke</button>
        </div>
    @endif

    @if($modalFour)
        <div class="profile__modal">
            <p class="profile__modal-text">You currently have <b>{{$currentFriends}} friends</b>, you need to have <b>1 friend</b> to unlock this badge!</p>
            <button wire:click="toggleModals('modalFour')" class="button profile__modal-button">Oke</button>
        </div>
    @endif
</div>
