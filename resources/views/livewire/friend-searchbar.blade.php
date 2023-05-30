<div class="row">
    <div class="col-md-12 col-lg-4">
        <div class="friends__searchbar">
            <i class="icon-magnifying-glass friends__searchbar-icon"></i>
            <input wire:model="searchTerm" wire:change="search" class="friends__searchbar-inputfield" type="text"
                   placeholder="Search for a friend">
        </div>
    </div>

    @if($showResults)
        @forelse($searchResults as $result)
            <a class="friends__friend" href="{{route('profile.show', ['username' => $result->username])}}">
                <img class="friends__friend-img" src="{{$result->avatar}}" alt="">
                <p class="friends__friend-name">{{$result->name}}</p>
            </a>
        @empty
            <span>Nobody found</span>
        @endforelse
    @endif
</div>
