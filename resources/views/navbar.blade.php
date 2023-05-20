<div class="sidebar">
    <nav class="nav">
        <a href="{{ route('home') }}" class="nav__link{{ request()->routeIs('home') ? ' nav__link--active' : '' }}"><i class="icon-home nav__item"></i></a>
        <a href="{{route('friends')}}" class="nav__link{{ request()->routeIs('friends') ? ' nav__link--active' : '' }}"><i class="icon-friends nav__item"></i></a>
        <a href="" class="nav__link"><i class="icon-training nav__item"></i></a>
        <a href="{{route('profile')}}" class="nav__link{{ request()->routeIs('profile') ? ' nav__link--active' : '' }}"><i class="icon-profile nav__item"></i></a>
        <a href="{{route('shop')}}" class="nav__link{{ request()->routeIs('shop') ? ' nav__link--active' : '' }}"><i class="icon-shop nav__item"></i></a>
    </nav>
    <a href="{{route('profile')}}">
        <img class="page__profile-img" src="{{auth()->user()->avatar}}" alt="">
    </a>
</div>
