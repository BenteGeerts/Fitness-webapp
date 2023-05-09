@extends('layouts.app')
@section('content')
    <section class="friends">
        <div class="page__heading">
            <h1>Friends</h1>
            <img class="page__profile-img" src="/images/profileimg.png" alt="">
        </div>

        <div class="row">
            <div class="col-md-12 col-lg-4">
                <div class="friends__searchbar">
                    <i class="icon-magnifying-glass friends__searchbar-icon"></i>
                    <input class="friends__searchbar-inputfield" type="text" placeholder="Search for a friend">
                </div>
            </div>
        </div>

        <h2 class="h3">Ranking</h2>

        <div class="friends__switch">
            <a class="friends__switch-item friends__switch-item--active" data-toggle-ranking="friends">Friends</a>
            <a class="friends__switch-item" data-toggle-ranking="world">World</a>
        </div>


        <div class="friends__ranking friends__ranking--show" data-ranking="friends">
            <div class="friends__ranking-leaderboard">
                <div class="friends__ranking-card">
                    <div class="friends__ranking-number">1</div>
                    <img class="friends__ranking-medal" src="/images/firstplace.png" alt="">
                    <p class="friends__ranking-name">Bente Geerts</p>
                </div>

                <div class="friends__ranking-card">
                    <div class="friends__ranking-number">2</div>
                    <img class="friends__ranking-medal" src="/images/secondplace.png" alt="">
                    <p class="friends__ranking-name">Bente Geerts</p>
                </div>

                <div class="friends__ranking-card">
                    <div class="friends__ranking-number">3</div>
                    <img class="friends__ranking-medal" src="/images/thirdplace.png" alt="">
                    <p class="friends__ranking-name">Bente Geerts</p>
                </div>
            </div>

            <div class="friends__ranking-card">
                <div class="friends__ranking-number">4</div>
                <p class="friends__ranking-name">Bente Geerts</p>
            </div>

            <div class="friends__ranking-card">
                <div class="friends__ranking-number">5</div>
                <p class="friends__ranking-name">Bente Geerts</p>
            </div>
        </div>

        <div class="friends__ranking" data-ranking="world">
            <div class="friends__ranking-leaderboard">
                <div class="friends__ranking-card">
                    <div class="friends__ranking-number">1</div>
                    <img class="friends__ranking-medal" src="/images/firstplace.png" alt="">
                    <p class="friends__ranking-name">Bente Geerts :-)</p>
                </div>

                <div class="friends__ranking-card">
                    <div class="friends__ranking-number">2</div>
                    <img class="friends__ranking-medal" src="/images/secondplace.png" alt="">
                    <p class="friends__ranking-name">Bente Geerts</p>
                </div>

                <div class="friends__ranking-card">
                    <div class="friends__ranking-number">3</div>
                    <img class="friends__ranking-medal" src="/images/thirdplace.png" alt="">
                    <p class="friends__ranking-name">Bente Geerts</p>
                </div>
            </div>

            <div class="friends__ranking-card">
                <div class="friends__ranking-number">4</div>
                <p class="friends__ranking-name">Bente Geerts</p>
            </div>

            <div class="friends__ranking-card">
                <div class="friends__ranking-number">5</div>
                <p class="friends__ranking-name">Bente Geerts</p>
            </div>
        </div>

        <h3 class="h3">My friends</h3>

        <div class="friends__friend">
            <img class="friends__friend-img" src="/images/profileimg.png" alt="">
            <p class="friends__friend-name">Eleanor Pena</p>
        </div>

        <div class="friends__friend">
            <img class="friends__friend-img" src="/images/profileimg.png" alt="">
            <p class="friends__friend-name">Eleanor Pena</p>
        </div>

        <div class="friends__button">
            <a class="button button--medium" href="">Load more</a>
        </div>
    </section>
@endsection
