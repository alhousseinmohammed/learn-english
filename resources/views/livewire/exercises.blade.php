{{-- @section('content') --}}
<div class="curriculum">
    <h1>Exercises</h1>
    <a href="{{ route('lesson.create') }}">Add Exercises</a>
    <table class="table" border>
        <thead>
            <tr>
                <th>ID</th>
                <th>Lesson</th>
                <th>type</th>
                <th>Question</th>
                <th>Options</th>
                <th>Answer</th>
                <th>Order</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($exercises as $exercise)
                <tr>
                    <td>{{ $exercise->id }}</td>
                    <td>{{ $exercise->lesson->title }}</td>
                    <td>{{ $exercise->type }}</td>

                    <!-- Inline Editing for Question -->
                    <td x-data="{
                        {{-- langs: @js($exercise->getTranslations('question')),
                        clicked: false,
                        value: '{{ $exercise->question }}',
                        selectedLang: Object.keys(@js($exercise->getTranslations('question')))[0] // Initialize to the first language
                    }">

                        <p x-show="!clicked" @dblclick="clicked = true" x-text="value"></p>

                        <input x-show="clicked" x-model="value"
                            @blur="clicked = false; $wire.call('updateQuestion', {{ $exercise->id }}, value)"
                            type="text">

                        <select x-model="selectedLang">
                            <template x-for="(question, lang) in langs" :key="lang">
                                <option :value="question" x-text="lang"></option>
                            </template>
                        </select>

                        <!-- Display the currently selected language -->
                        <p x-text="selectedLang + langs[selectedLang]"></p>
                    </td> --}}
                    
                        {{-- @dd($exercise->getTranslations('options')); --}}
                            <
                            !--Inline Editing
                        for Options-- >
                        {{-- <td x-data="{
                        langs: @js($exercise->getTranslations('options')),
                        selectedLang: Object.keys(@js($exercise->getTranslations('options')))[0] // Initialize to the first language
                    }">
                        <select x-model="selectedLang">
                            <template x-for="(options, lang) in langs" :key="lang">
                                <option :value="lang" x-text="lang"></option>
                            </template>
                            <option value="New">New</option>

                        </select> --}}
                    
                            <
                            !--This will now display the currently selected language-- >
                            {{-- <div x-text="selectedLang"></div> --}}
                        {{-- <form action="">
                            <input type="text" placeholder="language">
                            <input type="text" wire:model="newOption[]">
                            <input type="text" wire:model="newOption[]">
                            <input type="text" wire:model="newOption[]">
                            <input type="text" wire:model="newOption[]">
                            <button wire:click="addTranslation">Add Translation</button>
                        </form> --}}
                            <
                            template x -
                            if ="selectedLang"> <!-- Show options only if a language is selected -->
                        <template x-for="(option, index) in langs[selectedLang]" :key="index">
                            <p x-text="option"></p>
                        </template>
                        </template>
                    </td>

                    <!-- Inline Editing for Answer -->
                    <td x-data="{ answerClicked: false, answerValue: '{{ $exercise->answer }}' }">
                        <p x-show="!answerClicked" @dblclick="answerClicked = true" x-text="answerValue"></p>
                        <input x-show="answerClicked" x-model="answerValue"
                            @blur="answerClicked = false; $wire.call('updateAnswer', {{ $exercise->id }}, answerValue)"
                            type="text" class="form-control">
                    </td>
                    <!-- Inline Editing for Order -->
                    <td>
                        <input type="number" value="{{ $exercise->order }}"
                            @blur="$wire.call('updateOrder', {{ $exercise->id }}, $event.target.value)">
                    </td>

                    <td>
                        <a>Edit</a>
                        <form method="POST" style="display: inline;">
                            @csrf
                            @method('DELETE')
                            <button>Delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
{{-- @endsection --}}
