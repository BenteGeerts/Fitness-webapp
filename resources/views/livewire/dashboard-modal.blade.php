<div class="dashboard__modal">
    <div class="dashboard__modal-text">
        <span>Currently your username is: <b>{{auth()->user()->username}}</b></span>
        <span>You can update your username here.</span>
    </div>

    <div class="form__field">
        <label class="form__label" for="username">Username</label>
        <input wire:model="searchTerm" wire:change="changeUsername" class="form__input-field" name="username" id="username" type="email"
               placeholder="Preferred username">
        @if($showError)
            <span> Oops! Username already taken!</span>
        @endif

        @if($showAvailable)
            <span>Alright! Username available!</span>
        @endif
    </div>

    <button class="button">Save</button>
</div>

