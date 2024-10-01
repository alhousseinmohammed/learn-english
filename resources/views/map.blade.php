<style>
    .duolingo-button {
        display: flex;
        align-items: center;
        font-size: 1rem;
        padding: .5em .5em;
        color: #495057;
        background-color: #f1f3f5;
        border-radius: 0.5em;
        border: 0.1em solid #ced4da;
        box-shadow: 0 4px #ced4da;
        transition: all 0.1s;
        user-select: none;
        margin-bottom: 1em;
        margin-right: 1em;
    }

    .duolingo-button-option {
        border: 0.1em solid #ced4da;
        width: 1.25em;
        border-radius: 0.35em;
        margin-right: .5em;
    }

    .duolingo-button-text {
        flex: 1 1 auto;
        min-width: 0;
        min-height: 0;
        text-decoration: none;
        color: black;
    }

    .duolingo-button:focus,
    .duolingo-button:hover {
        background-color: #e9ecef;
        outline: 2px #1971c2;
    }

    .duolingo-button:active {
        transform: translateY(4px);
        box-shadow: none;
    }

    .duolingo-button.large {
        font-size: 1rem;
        border-radius: 100%;
        width: 100px;
        height: 100px;
        mragin-left: 100px;
        text-align: center;

    }
</style>
<button class="duolingo-button large completed">
    <a class="duolingo-button-text">lesson</a>
</button>

@foreach ($lessons as $lesson)
    {{-- @dd($lesson->exercises()->orderBy('order')->first()); --}}

    <button class="duolingo-button large completed">
        <a href="{{ action('App\Http\Controllers\ExerciseController@show', $lesson->exercises()->orderBy('order')->first()) }}"
            class="duolingo-button-text">{{ $lesson->order }}</a>
    </button>
@endforeach
