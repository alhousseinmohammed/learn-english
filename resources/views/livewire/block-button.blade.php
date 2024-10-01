    {{-- Stop trying to control. --}}
    <label class="button" for={{ $id }}>
        <p class="answer-number">{{ $id }}</p>
        {{-- <p class="answer-choice">Fill in the blanks.</p> --}}
        <input type="text" name="{{ 'options[]' }}" name="{{ 'option' . $id }}" id="" placeholder="+"
            class="answer-choice" wire:model="optionValue" wire:change="updateOptinValue">

        <input type="radio" name="answer" id={{ $id }} wire:model='answerValue' value={{ $answerValue }}>
    </label>
