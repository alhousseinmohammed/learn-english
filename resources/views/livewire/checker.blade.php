<div>
    {{-- Nothing in the world is as soft and yielding as water. --}}
    <input type="text" wire:model="answer" class="answer-input" placeholder="Type the name here">

    <button type="button" class="submit-btn" wire:click="change">{{ $name }}</button>

</div>
