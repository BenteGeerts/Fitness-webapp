<nav class="nav">
    <a href="{{ route("home") }}" class="nav__link{{ request()->routeIs('home') ? ' nav__link--active' : '' }}"><i class="icon-home nav__item"></i></a>
    <a href="{{route("friends")}}" class="nav__link{{ request()->routeIs('friends') ? ' nav__link--active' : '' }}"><i class="icon-friends nav__item"></i></a>
    <a href="" class="nav__link"><i class="icon-training nav__item"></i></a>
    <a href="" class="nav__link"><i class="icon-profile nav__item"></i></a>
    <a href="{{Route("shop")}}" class="nav__link"><i class="icon-shop nav__item"></i></a>
</nav>
