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

        .question p {
            font-size: 1.5em;
            color: #333;
            margin: 20px 0;
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
            <div class="question">
                <p>I <span class="blank" contenteditable="true" data-placeholder="..."></span> to the store yesterday.
                </p>
            </div>
            <div class="button-container">
                <button class="btn btn-primary">Check</button>
            </div>
        </div>
    </div>
</body>

</html>
