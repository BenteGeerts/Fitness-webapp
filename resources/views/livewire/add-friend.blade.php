@if(!$friendAdded)
    <button wire:click="addFriend" class="profile__wrapper-button button">+ Add friend</button>
@endif

@if($friendAdded)
    <button wire:click="addFriend" class="profile__wrapper-button button button--secondary">Already friends</button>
@endif
