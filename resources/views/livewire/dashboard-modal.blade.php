<div wire:init="addOverlay">
    @if($showModal)
        <div class="dashboard__modal">
            <div class="dashboard__modal-text">
                <span>Currently your username is: <b>{{auth()->user()->username}}</b></span>
                <span>You can update your username here.</span>
            </div>

            <div class="form__field">
                <label class="form__label" for="username">Username</label>
                <input wire:model="searchTerm" wire:change="changeUsername" class="form__input-field" name="username"
                       id="username" type="text"
                       placeholder="Preferred username" required>
                @if($showError)
                    <div class="error">
                        <span> Oops! Username already taken!</span>
                    </div>
                @endif

                @if($showAvailable)
                   <div class="error error--green">
                       <span>Alright! Username available!</span>
                   </div>
                @endif

                @error('searchTerm')
                <div class="error">
                    <span>{{ $message }}</span>
                </div>
                @enderror
            </div>

            <button wire:click="save" class="button">Save</button>
        </div>
    @endif
</div>

