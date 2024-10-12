<div>
    {{-- Nothing in the world is as soft and yielding as water. --}}
    <input type="text" wire:model="answer" wire:change="change" class="answer-input" placeholder="Type the name here">

    <button type="button" class="submit-btn" wire:click="change">{{ $name }}</button>
    <h1>{{ $answer }}</h1>

</div>
