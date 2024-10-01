<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fill in the Blanks - Duolingo Style</title>
    <link rel="stylesheet" href="styles.css"> <!-- Link to your custom CSS -->
    <style>
        body {
            font-family: 'Helvetica Neue', Arial, sans-serif;
            background-color: #f7f8fa;
            margin: 0;
            padding: 20px;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        .container {
            max-width: 500px;
            width: 100%;
        }

        .exercise-card {
            background-color: white;
            border-radius: 15px;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
            padding: 20px;
            text-align: center;
        }

        .question textarea {
            font-size: 1.5em;
            color: #333;
            margin: 20px 0;
            border: none;
        }

        textarea:focus {
            border: none;
            outline: none;
        }

        ::placeholder {
            font-size: small;
            overflow: visible;
            text-align: left;
            word-wrap: wrap;
        }

        input {
            /* width: 50%; */
            /* width: fit-content; */
            border-radius: 100px;
        }

        .blank {
            display: inline-block;
            border-bottom: 2px solid #4CAF50;
            width: 100px;
            text-align: center;
            padding: 5px;
            font-size: 1em;
            color: #333;
            outline: none;
            cursor: pointer;
        }

        .blank:empty:before {
            content: attr(data-placeholder);
            color: #bbb;
        }

        .blank:focus {
            border-bottom: 2px solid #1e90ff;
        }

        .button-container {
            margin-top: 20px;
        }

        .btn {
            background-color: #58CC02;
            border: none;
            color: white;
            font-size: 1.2em;
            padding: 10px 20px;
            cursor: pointer;
            border-radius: 50px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
        }

        .btn:hover {
            background-color: #4CAF50;
        }

        .btn:active {
            background-color: #45a049;
        }
    </style>
</head>

<body>
    <div class="container">
        <div class="exercise-card">
            <form action="{{ action('App\Http\Controllers\ExerciseController@store') }}" method="post">
                @csrf
                <div class="question">
                    {{-- <p>I <span class="blank" contenteditable="true" data-placeholder="..."></span> to the store
                    yesterday.
                    </p> --}}
                    <textarea type="text" name="question"
                        placeholder="Type the question. Represent blanks with ___ (three underscores)."></textarea>
                </div>
                <div>
                    <input type="text" name="answer" placeholder="Type the correct answer">
                </div>
                <input hidden type="text" name="type" value="blanks">
                <input type="text" name="admin_id" value="2">
                <input type="text" name="lesson_id" value="2">
                <div class="button-container">
                    <button type="submit" class="btn btn-primary">create</button>
                </div>
            </form>


        </div>
    </div>
</body>

</html>
