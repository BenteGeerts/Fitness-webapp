<div>
    <a wire:click="showExtra" class="nav__link{{ request()->routeIs('shop') ? ' nav__link--active' : '' }}"><i
            class="icon-more nav__item"></i></a>

    @if($showExtra)
        <div class="nav__extra-wrapper">
            <a class="nav__extra" href="{{route('shop')}}">
                <i class="icon-shop nav__item"></i>
                <span class="nav__extra-text">Shop</span>
            </a>

            <a class="nav__extra" href="{{route('settings')}}">
                <i class="icon-settings nav__item"></i>
                <span class="nav__extra-text">Settings</span>
            </a>

            <a class="nav__extra" href="{{route('logout')}}">
                <i class="icon-logout nav__item"></i>
                <span class="nav__extra-text">Logout</span>
            </a>
        </div>
    @endif
</div>
