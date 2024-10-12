<head>
    <link rel="stylesheet" href="{{ url('duolingo-clone-master/css/loginpage.css') }}" />
    <link rel="stylesheet" href="{{ url('duolingo-clone-master/css/signup.css') }}" />
    <link rel="stylesheet" href="{{ url('duolingo-clone-master/css/main.css') }}" />

    <style>
        form {
            display: grid;
            padding: 10%;
            padding-left: 20%;
            padding-right: 20%;
            grid-template-areas: ". ." " . .";
            gap: 1%;
        }
    </style>

</head>

<body>

    <form class="input-field" action="{{ action('App\Http\Controllers\LessonController@store') }}" method="post">
        <h1>Create <br>
            Lesson
        </h1>
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
