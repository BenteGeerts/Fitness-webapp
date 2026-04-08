<div wire:init="addOverlay">
    @if($showModal)
        <div class="modal-backdrop"></div>
        <div class="dashboard__modal">
            <h2 class="dashboard__modal-title">Welcome! Set your username</h2>

            <div class="dashboard__modal-text">
                <span>Your current username is <b>{{ auth()->user()->username }}</b>.</span>
                <span>You can update it below — choose something memorable!</span>
            </div>

            <div class="form__field form__field--full">
                <label class="form__label" for="username">New username</label>
                <input wire:model="searchTerm" wire:change="changeUsername"
                       class="form__input-field" name="username" id="username" type="text"
                       placeholder="Pick a username">

                @if($showError)
                    <div class="error">
                        <span>Username already taken — try another one</span>
                    </div>
                @endif

                @if($showAvailable)
                    <div class="error error--green">
                        <span>Username is available!</span>
                    </div>
                @endif

                @error('searchTerm')
                    <div class="error"><span>{{ $message }}</span></div>
                @enderror
            </div>

            <button wire:click="save" class="button">Save username</button>
        </div>
    @endif
</div>
