<section class="friends">
    <div class="row justify-content-center">
        <div class="col-md-12 col-lg-10">

            <div class="page__heading">
                <a class="no-underline" href="{{ route('home') }}">
                    <i class="icon-back page__heading-icon"></i>
                </a>
                <h1>Friends</h1>
            </div>

            {{-- Search --}}
            <div class="row">
                <div class="col-md-12 col-lg-5">
                    <div class="friends__searchbar">
                        <i class="icon-magnifying-glass friends__searchbar-icon"></i>
                        <input wire:model="searchTerm" wire:change="search"
                               class="friends__searchbar-inputfield"
                               type="text" placeholder="Search by name or username">
                    </div>
                </div>

                @if($showResults)
                    <div class="col-12 friends__search-results">
                        @forelse($searchResults as $result)
                            <a class="friends__friend" href="{{ route('profile.show', ['username' => $result->username]) }}">
                                <img class="friends__friend-img" src="{{ $result->avatar }}" alt="{{ $result->name }}">
                                <p class="friends__friend-name">{{ $result->name }}</p>
                                <span class="friends__friend-username">@{{ $result->username }}</span>
                            </a>
                        @empty
                            <p class="friends__empty-message">No users found for "{{ $searchTerm }}"</p>
                        @endforelse
                    </div>
                @endif
            </div>

            {{-- Leaderboard --}}
            @if(count($friendsLeaderboard) > 0)
                <h2 class="h3 friends__section-heading">Leaderboard</h2>

                <div class="friends__switch">
                    <a class="friends__switch-item friends__switch-item--active" data-toggle-ranking="friends">Friends</a>
                    <a class="friends__switch-item" data-toggle-ranking="world">World</a>
                </div>

                <div class="row">
                    {{-- Friends leaderboard --}}
                    <div class="col-md-12 col-lg-6">
                        <div class="friends__ranking friends__ranking--show" data-ranking="friends">

                            @foreach($friendsLeaderboard as $friend)
                                @php
                                    $pos = $loop->index + 1;
                                    $medalClass = match($pos) { 1 => 'gold', 2 => 'silver', 3 => 'bronze', default => '' };
                                    $medalImg = match($pos) { 1 => '/images/firstplace.png', 2 => '/images/secondplace.png', 3 => '/images/thirdplace.png', default => null };
                                @endphp

                                @if($pos == 1)<div class="friends__ranking-leaderboard">@endif

                                <a class="friends__ranking-card"
                                   href="{{ route('profile.show', ['username' => $friend->username]) }}">
                                    <div class="friends__ranking-number {{ $medalClass ? 'friends__ranking-number--'.$medalClass : '' }}">
                                        {{ $pos }}
                                    </div>
                                    @if($medalImg)
                                        <img class="friends__ranking-medal" src="{{ $medalImg }}" alt="medal">
                                    @endif
                                    <p class="friends__ranking-name">{{ $friend->name }}</p>
                                    <div class="friends__diamond-count">
                                        <i class="icon-diamond"></i>
                                        <span>{{ $friend->achievement->total_diamonds }}</span>
                                    </div>
                                </a>

                                @if($pos == 3 || ($loop->last && $pos < 3))
                                    </div>
                                @endif
                            @endforeach

                        </div>
                    </div>

                    {{-- World leaderboard --}}
                    <div class="col-md-12 col-lg-6">
                        <div class="friends__ranking" data-ranking="world">

                            @foreach($worldLeaderboard as $person)
                                @php
                                    $pos = $loop->index + 1;
                                    $medalClass = match($pos) { 1 => 'gold', 2 => 'silver', 3 => 'bronze', default => '' };
                                    $medalImg = match($pos) { 1 => '/images/firstplace.png', 2 => '/images/secondplace.png', 3 => '/images/thirdplace.png', default => null };
                                @endphp

                                @if($pos == 1)<div class="friends__ranking-leaderboard">@endif

                                <a class="friends__ranking-card"
                                   href="{{ route('profile.show', ['username' => $person->user->username]) }}">
                                    <div class="friends__ranking-number {{ $medalClass ? 'friends__ranking-number--'.$medalClass : '' }}">
                                        {{ $pos }}
                                    </div>
                                    @if($medalImg)
                                        <img class="friends__ranking-medal" src="{{ $medalImg }}" alt="medal">
                                    @endif
                                    <p class="friends__ranking-name">{{ $person->user->name }}</p>
                                    <div class="friends__diamond-count">
                                        <i class="icon-diamond"></i>
                                        <span>{{ $person->total_diamonds }}</span>
                                    </div>
                                </a>

                                @if($pos == 3 || ($loop->last && $pos < 3))
                                    </div>
                                @endif
                            @endforeach

                        </div>
                    </div>
                </div>

                {{-- My friends --}}
                <h3 class="h3 h3--spacing friends__section-heading--top">My friends</h3>

                <div class="row">
                    @if(count($friends) === 0)
                        <div class="col-12">
                            <p class="friends__empty-message">You don't have any friends yet. Search for friends above to start competing.</p>
                        </div>
                    @endif
                    @foreach ($friends as $key => $friend)
                        @if ($key % 2 === 0)
                            <div class="col-md-12 col-lg-3">
                        @endif

                        <a class="friends__friend" href="{{ route('profile.show', ['username' => $friend->username]) }}">
                            <img class="friends__friend-img" src="{{ $friend->avatar }}" alt="{{ $friend->name }}">
                            <p class="friends__friend-name">{{ $friend->name }}</p>
                        </a>

                        @if ($key % 2 !== 0 || $loop->last)
                            </div>
                        @endif
                    @endforeach
                </div>

                <div class="friends__button">
                    <a wire:click="loadMore" class="button button--medium">Load more</a>
                </div>

            @else
                {{-- Empty state --}}
                <div class="friends__cup">
                    <img src="/images/prizecup.png" alt="trophy" class="friends__cup-img">
                    <span class="friends__cup-text friends__cup-text--main">You're all alone at the top!</span>
                    <span class="friends__cup-text friends__cup-text--sub">Search for friends above to start competing</span>
                </div>
            @endif

        </div>
    </div>
</section>
