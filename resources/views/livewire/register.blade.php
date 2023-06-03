<form class="form" method="post" action="{{Route("register")}}">
    @csrf
    <div class="form__names">
        <div class="form__field form__field--small">
            <label class="form__label" for="firstname">First name</label>
            <input class="form__input-field" name="firstname" id="firstname" type="text"
                   value="{{ old('firstname') }}">
        </div>

        <div class="form__field form__field--small">
            <label class="form__label" for="lastname">Last name</label>
            <input class="form__input-field" name="lastname" id="lastname" type="text"
                   value="{{ old('lastname') }}">
        </div>
    </div>

    <div class="form__field">
        <label class="form__label" for="username">Username</label>
        <input wire:change="checkUsername" wire:model="searchTerm" class="form__input-field" name="username" id="username" type="text"
               value="{{ old('username') }}">

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
    </div>

    <div class="form__field">
        <label class="form__label" for="email">Email</label>
        <input class="form__input-field" name="email" id="email" type="email"
               value="{{ old('email') }}">
    </div>

    <div class="form__field">
        <label class="form__label" for="password">Password</label>
        <div class="form__password">
            <input class="form__input-field" name="password" id="password" type="password" data-password
                   value="{{ old('password') }}">
            <i class="icon-visibility form__icon" data-toggle-visibility></i>
        </div>
    </div>

    @error('*')
    <div class="error">{{ $message }}</div>
    @enderror

    <div class="link-wrapper">
        <p>Already have an account? <a class="link" href="{{Route("login")}}">Login in</a></p>
    </div>

    <button class="button button--big" type="submit" @if (!$showAvailable) disabled @endif>Create your account</button>
</form>
