<div class="training__exercise">
    <div class="program">
        <!-- Program drawing -->
        <div class="program__drawing-container">
            <img class="program__drawing" src="/images/drawing__running.svg" alt="">
        </div>
        <!-- Program text -->
        <div class="program__text-container">
            <p class="program__title">{{$exercise->name}}</p>
            <div class="program__icons">
                <div class="program__icon-wrapper">
                    <i class="icon-diamond program__icon"></i>
                    <p class="program__icon-text">{{$exercise->diamonds}}</p>
                </div>
            </div>
        </div>
    </div>


   <div class="training__input-wrapper">
       @foreach($existingSets[$exercise->id] ?? [] as $index => $set)
           <div class="training__input">
               <input class="training__input-field" type="number" placeholder="Reps"  wire:model="existingSets.{{ $exercise->id }}.{{ $index }}.reps">
               <span>X</span>
               <input class="training__input-field" type="number" placeholder="Weight"  wire:model="existingSets.{{ $exercise->id }}.{{ $index }}.weight">
               <span>KG</span>
               <button  wire:click="removeSet('{{ $exercise->id }}', {{ $index }})" class="button button--tertiary training__input-button">Remove</button>
           </div>
       @endforeach

           <button class="button training__input-button training__input-button--under"
                   wire:click="addSet('{{ $exercise->id }}')">Add Set
           </button>

   </div>

    <div class="training__buttons training__buttons--no-spacing">
        <button wire:click="previousExercise" class="button button--secondary">Back</button>

        @if($currentIndex != count($exercises) - 1)
            <button wire:click="nextExercise" class="button">Next</button>
        @endif

        @if($currentIndex == count($exercises) - 1)
            <button wire:click="save" class="button">Save</button>
        @endif
    </div>
</div>
