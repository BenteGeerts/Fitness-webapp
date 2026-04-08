<form class="form" method="post" action="{{ Route('register') }}">
    @csrf
    <div class="form__names">
        <div wire:ignore class="form__field form__field--small">
            <label class="form__label" for="firstname">First name</label>
            <input class="form__input-field" name="firstname" id="firstname" type="text"
                   placeholder="Jane" value="{{ old('firstname') }}">
        </div>

        <div wire:ignore class="form__field form__field--small">
            <label class="form__label" for="lastname">Last name</label>
            <input class="form__input-field" name="lastname" id="lastname" type="text"
                   placeholder="Doe" value="{{ old('lastname') }}">
        </div>
    </div>

    <div class="form__field">
        <label class="form__label" for="username">Username</label>
        <input wire:change="checkUsername" wire:model="searchTerm"
               class="form__input-field" name="username" id="username" type="text"
               placeholder="Pick a unique username" value="{{ old('username') }}">

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
    </div>

    <div class="form__field">
        <label class="form__label" for="email">Email</label>
        <input wire:change="checkEmail" wire:model="email"
               class="form__input-field" name="email" id="email" type="email"
               placeholder="you@example.com" value="{{ old('email') }}">

        @if($showEmailError)
            <div class="error">
                <span>Email address already in use</span>
            </div>
        @endif
    </div>

    <div class="form__field">
        <label class="form__label" for="password">Password</label>
        <div class="form__password">
            <input class="form__input-field" name="password" id="password"
                   type="password" placeholder="At least 8 characters" data-password>
            <i class="icon-visibility form__icon" data-toggle-visibility></i>
        </div>
    </div>

    @error('*')
        <div class="error">{{ $message }}</div>
    @enderror

    <div class="link-wrapper" style="padding-top: 16px; padding-bottom: 8px;">
        <p style="color: #8B8BA8; font-size: 0.9375rem;">
            Already have an account? <a class="link" href="{{ Route('login') }}">Sign in</a>
        </p>
    </div>

    <button class="button button--big" type="submit"
            @if (!$showAvailable || $showEmailError) disabled @endif>
        Create account
    </button>
</form>
