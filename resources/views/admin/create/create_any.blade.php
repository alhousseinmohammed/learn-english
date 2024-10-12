<head>
    <link rel="stylesheet" href="{{ url('duolingo-clone-master/css/loginpage.css') }}" />
    <link rel="stylesheet" href="{{ url('duolingo-clone-master/css/signup.css') }}" />
    <link rel="stylesheet" href="{{ url('duolingo-clone-master/css/main.css') }}" />

    <style>
        form {
            display: flex;
            padding: 10%;
            padding-left: 20%;
            padding-right: 20%;
            grid-template-areas: ". ." " . .";
            gap: 1%;
            grid-template-columns: auto auto;
        }

        body {
            /* display: grid; */
            /* grid-template-areas: '. .' */
        }
    </style>

</head>

<body>
    <form class="input-field" action="{{ action('App\Http\Controllers\LevelController@store') }}" method="post">
        @csrf
        <h2>Create <br>
            Level
        </h2>
        <input class="input-field" type="text" name="name" placeholder="name">
        <button class="button-div create-account-button" type="submit">Add</button>
    </form>

    <form class="input-field" action="{{ action('App\Http\Controllers\ThemeController@store') }}" method="post">
        @csrf
        <h2>Create <br>
            Unit
        </h2>
        <input class="input-field" type="text" name="name">
        <select class="input-field" name="level_id">
            @foreach ($levels as $level)
                <option value="{{ $level->id }}">{{ $level->name }}</option>
            @endforeach
        </select>
        <button class="button-div create-account-button" type="submit">Add</button>
    </form>

    <form class="input-field" action="{{ action('App\Http\Controllers\LessonController@store') }}" method="post">
        <h2>Create <br>
            Lesson
        </h2>
        @csrf
        <input class="input-field" type="text" name="title" placeholder="title">
        <select class="input-field" name="theme_id" aria-placeholder="theme">
            @foreach ($themes as $theme)
                <option value="{{ $theme->id }}">{{ $theme->name }}</option>
            @endforeach
        </select>
        <input class="input-field" type="number" name="admin_id" placeholder="admin">
        <textarea class="input-field"name="description" id="" cols="200" rows="1" placeholder="description"></textarea>
        <button class="button-div create-account-button" type="submit">Add</button>
    </form>



</body>
