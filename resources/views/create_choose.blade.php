<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ url('duolingo-clone-master/css/questionaire.css') }}">
    <link rel="stylesheet" href="{{ url('duolingo-clone-master/css/main.css') }}">
    <script src="{{ url('duolingo-clone-master/js/questionaire.js') }}"></script>

    <link rel="stylesheet" href="{{ url('duolingo-clone-master/css/questionaire.css') }}">
    <link rel="stylesheet" href="{{ url('duolingo-clone-master/css/main.css') }}">

    <link rel="icon" href="{{ url('duolingo-clone-master/assets/images/favicon.ico') }}" />

    <!-- Custom CSS Files -->
    <link rel="stylesheet" href="{{ url('duolingo-clone-master/css/loginpage.css') }}" />
    <link rel="stylesheet" href="{{ url('duolingo-clone-master/css/signup.css') }}" />
    <link rel="stylesheet" href="{{ url('duolingo-clone-master/css/main.css') }}" />

    <title>Duolingo</title>
    <link rel="icon" href="{{ url('duolingo-clone-master/assets/images/favicon.ico') }}">

    <style>
        body {
            font-family: sans-serif;
            height: 100vh;
            display: flex;
            justify-content: center;
            flex-direction: column;
            align-items: center;
        }

        h1 {
            font-weight: 400;
            text-align: center;
        }

        .button-container {
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            width: 500px;
            margin: 0 auto;
        }

        .button {
            min-width: 100%;
            border-radius: 16px;
            border: 2px solid #e5e5e5;
            border-bottom: 6px solid #e5e5e5;
            margin: 10px;
            transition: all 0.1s;
            display: inline-flex;
            flex-direction: row-reverse;
            padding: 0 16px;
        }

        .button:hover {}

        .button:active {
            border-bottom: 2px solid #1cb0f6;
        }

        .answer-number {
            border: 2px solid #e5e5e5;
            border-radius: 8px;
            width: 30px;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .answer-choice,
        .answer-choice:active {
            width: 100%;
            text-align: center;
            font-size: 19px;
            color: #4b4b4b;
            border: none;
            outline: none;
        }

        .answer-choice:focus::placeholder {
            visibility: hidden;
        }

        label:has(input:checked) {
            background-color: #e0ffdd;
            border-color: #2ec748;
        }
    </style>

    <style>
        :root {
            --grey-color: rgb(228, 228, 228);
            --darker-grey-color: rgb(189, 189, 189);
            --text-color: rgb(60, 60, 60);
            --border-radius: 15px;
        }

        body {
            margin: 0;
            padding: 0;
            height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
            overflow: hidden;
            user-select: none;
            font-family: "Fredoka";
            color: var(--text-color);
            background-color: rgb(250, 250, 250);
        }

        .wrapper {
            height: 60vh;
            width: 50vw;
            display: flex;
            flex-direction: column;
            justify-content: space-between;
            align-items: flex-start;
            margin-bottom: 5em;
        }

        h1 {
            width: 100%;
            font-weight: 600;
            text-align: left;
        }

        .top__container {
            margin-top: 50px;
            width: 100%;
            height: 250px;
        }

        .image_text__container {
            display: flex;
            justify-content: flex-start;
            align-items: center;
        }

        img {
            width: 150px;
            display: block;
        }

        #original__text {
            border: 2px solid var(--grey-color);
            padding: 1em;
            width: auto;
            border-radius: var(--border-radius);
            margin-left: 20px;
            font-size: 1.2em;
        }

        span {
            display: inline-block;
            border-bottom: 2px dashed var(--darker-grey-color);
            margin-right: 5px;
        }

        #destination__container {
            padding: 0.5em 0;
            height: 60px;
            width: 100%;
            border-top: 2px solid var(--grey-color);
            border-bottom: 2px solid var(--grey-color);
            display: flex;
            justify-content: flex-start;
            align-items: center;
        }

        #origin__container {
            padding: 3em 0;
            width: 100%;
            /* border-top: 2px solid var(--grey-color);
  border-bottom: 2px solid var(--grey-color); */
            display: flex;
            justify-content: flex-start;
            align-items: center;
        }

        .word {
            position: relative;
            border: 1px solid var(--grey-color);
            background-color: white;
            margin: 0 0.2em;
            padding: 0.5em 1em;
            border-radius: var(--border-radius);
            box-shadow: 0px 3px 0px 0px var(--grey-color);
            transition: 0.2s transform ease-in-out;
            cursor: pointer;
            z-index: 1;
            font-size: 1.2em;
            font-weight: 400;
        }

        .word__container {
            margin: 0 0.2em;
            padding: 0.5em 1em;
            border-radius: var(--border-radius);
        }

        .word__container:empty {
            background: var(--grey-color);
        }

        .word:active {
            transform: translateY(2px);
            box-shadow: none;
        }

        footer {
            position: fixed;
            bottom: 0;
            border-top: 2px solid var(--grey-color);
            width: 100%;
            display: flex;
            flex-direction: row-reverse;
            justify-content: space-around;
            align-items: center;
            padding: 2em 5em;
        }

        .skip_button,
        .check_button {
            font-size: 1em;
            font-weight: 600;
            padding: 0.8em 2.5em;
            border-radius: var(--border-radius);
            transition: 0s all ease-in-out;
            cursor: pointer;
        }

        .skip_button {
            color: var(--darker-grey-color);
            border: 1px solid var(--grey-color);
            background-color: white;
            box-shadow: 0px 3px 0px 0px var(--grey-color);
        }

        .skip_button:hover {
            background-color: rgba(143, 157, 173, 0.2);
        }

        .check_button {
            color: white;
            border: 1px solid #2ec748;
            background-color: #2ec748;
            box-shadow: 0px 3px 0px 0px #27aa3d;
        }

        .check_button:hover {
            background-color: #33db4f;
        }

        .skip_button:active,
        .check_button:active {
            transform: translateY(2px);
            box-shadow: none;
        }
    </style>

    <style>
        h1 {
            direction: rtl;
            text-align: right;
        }
    </style>
    @livewireStyles()
</head>


<body onkeypress="choose(event)">
    {{-- @livewire('headere') --}}
    <form action="{{ action('App\Http\Controllers\ExerciseController@store') }}" method="post"
        class="button-container" onkeypress="choose(event)">
        @csrf
        <h1>اختر المعنى الصحيح</h1>
        <input type="text" name="question" class="input-field" placeholder="question">
        @livewire('block-button', ['id' => 1])
        @livewire('block-button', ['id' => 2])
        @livewire('block-button', ['id' => 3])
        @livewire('block-button', ['id' => 4])
        <div style="display: flex; gap:1vw">
            <input class="input-field" hidden type="text" name="type" placeholder="type">
            <input class="input-field" type="number" name="admin_id" placeholder="admin">
            <input type="file" name="image" class="input-field" accept="audio/*">

            <select class="input-field" name="lesson_id" id="">
        </div>
        @foreach ($lessons as $lesson)
            <option value="{{ $lesson->id }}">{{ $lesson->title }}</option>
        @endforeach
        </select>
        <footer>
            <bitton class="skip_button">إلغاء</bitton>
            <button class="check_button">إضافة</button>
        </footer>
    </form>
    <script>
        function choose(event) {
            let key = event.code.replace('Digit', '');

            let option = document.getElementById(key);
            option.checked = true;
        }
    </script>
    @livewireScripts()
</body>

</html>
