@extends('layouts.app')
@section('content')
    <section class="friends">
        <div class="row justify-content-center">
            <div class="col-md-12 col-lg-10">
                <div class="page__heading">
                    <a class="no-underline" href="{{route('home')}}"><i class="icon-back page__heading-icon"></i></a>
                    <h1>Friends</h1>
                </div>

                <livewire:friend-searchbar/>

                <h2 class="h3">Ranking</h2>

                @if(count($friends) != 0)
                    <div class="friends__switch">
                        <a class="friends__switch-item friends__switch-item--active"
                           data-toggle-ranking="friends">Friends</a>
                        <a class="friends__switch-item" data-toggle-ranking="world">World</a>
                    </div>

                    <div class="row">
                        <div class="col-md-12 col-lg-6">
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
                        </div>

                        <div class="col-md-12 col-lg-6">
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
                        </div>
                    </div>

                    <h3 class="h3 h3--spacing">My friends</h3>

                    <div class="row">
                        @foreach ($friends as $key => $friend)
                            @if ($key % 2 === 0)
                                <div class="col-md-12 col-lg-3">
                                    @endif

                                    <div class="friends__friend">
                                        <img class="friends__friend-img" src="/images/profileimg.png" alt="">
                                        <p class="friends__friend-name">{{$friend->name}}</p>
                                    </div>

                                    @if ($key % 2 !== 0 || $loop->last)
                                </div>
                            @endif
                        @endforeach
                    </div>

                    <div class="friends__button">
                        <a class="button button--medium" href="">Load more</a>
                    </div>
                @endif

                @if(count($friends) == 0)
                   <div class="friends__cup">
                       <span class="friends__cup-text">You are now 1st!</span>
                       <img src="/images/prizecup.png" alt="prize cup">
                       <span class="friends__cup-text">Add friends to make it real</span>
                   </div>
                @endif
            </div>
        </div>
    </section>
@endsection
