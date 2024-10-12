    <link rel="stylesheet" href="{{ url('duolingo-clone-master/css/loginpage.css') }}" />
    <link rel="stylesheet" href="{{ url('duolingo-clone-master/css/signup.css') }}" />
    <link rel="stylesheet" href="{{ url('duolingo-clone-master/css/main.css') }}" />

    <style>
        form {
            display: grid;
            padding: 10%;
            padding-left: 20%;
            padding-right: 20%;
            grid-template-areas: ". . ." ". . .";
            gap: 1%;
        }
    </style>
    <form action="{{ action('App\Http\Controllers\ThemeController@store') }}" method="post">
        @csrf
        <input class="input-field" type="text" name="name">
        <select class="input-field" name="level_id">
            @foreach ($levels as $level)
                <option value="{{ $level->id }}">{{ $level->name }}</option>
            @endforeach
        </select>
    </form>
