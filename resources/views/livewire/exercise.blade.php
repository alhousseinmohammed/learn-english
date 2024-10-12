<div>
    <h1>{{ $test }}</h1>

    <input type="radio" wire:model="answer" value="a" wire:change="updateAnswer" placeholder="Type your answer here">
    <input type="radio" wire:model="answer" value="b" wire:change="updateAnswer" placeholder="Type your answer here">

    <p>Your answer: {{ $answer }}</p>
</div>
