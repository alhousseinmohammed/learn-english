    <link rel="stylesheet" href="{{ url('duolingo-clone-master/css/loginpage.css') }}" />
    <link rel="stylesheet" href="{{ url('duolingo-clone-master/css/signup.css') }}" />
    <link rel="stylesheet" href="{{ url('duolingo-clone-master/css/main.css') }}" />

    <style>
        form {
            display: grid;
            padding: 10%;
            padding-left: 20%;
            padding-right: 20%;
            grid-template-areas: ". . ." ". . ."
        }
    </style>
    <form action="{{ action('App\Http\Controllers\LevelController@store') }}" method="post">
        @csrf
        <input class="input-field" type="text" name="name" placeholder="name">
    </form>
