<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Name the Picture</title>
    <link rel="stylesheet" href="styles.css"> <!-- Link to your custom CSS -->
    <style>
        body {
            font-family: 'Arial', sans-serif;
            background-color: #f5f5f5;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        .exercise-container {
            background-color: white;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            max-width: 400px;
            text-align: center;
        }

        h2 {
            color: #333;
            margin-bottom: 20px;
        }

        .form-group {
            margin-bottom: 15px;
            text-align: left;
        }

        .form-group label {
            display: block;
            margin-bottom: 5px;
            color: #555;
        }

        .form-group input[type="file"],
        .form-group input[type="text"] {
            width: 100%;
            padding: 10px;
            border-radius: 5px;
            border: 1px solid #ddd;
            font-size: 1em;
        }

        .exercise-content {
            margin-bottom: 20px;
        }

        .exercise-image {
            max-width: 100%;
            height: auto;
            margin-bottom: 15px;
            border-radius: 8px;
            border: 1px solid #ddd;
        }

        .answer-input {
            width: 100%;
            padding: 10px;
            font-size: 1.1em;
            border-radius: 5px;
            border: 1px solid #ddd;
            margin-bottom: 20px;
            box-sizing: border-box;
        }

        .submit-btn {
            background-color: #58cc02;
            color: white;
            padding: 10px;
            font-size: 1.1em;
            border: none;
            border-radius: 8px;
            cursor: pointer;
            width: 100%;
            box-sizing: border-box;
        }

        .submit-btn:hover {
            background-color: #45a500;
        }
    </style>
</head>

<body>
    {{-- {{ $learner = auth()->user()->load('learner') }} --}}
    {{-- @dd($learner); --}}

    <div class="exercise-container">
        <h2>Name the Picture</h2>

        <div class="exercise-content">
            <!-- Image to be Named -->

            <img src="{{ url('images/' . $exercise->image) }}" alt="Image to Name" class="exercise-image">

            <p>{{ $exercise->id }},{{ $exercise->order }}</p>
            <p>{{ $exercise->image }}</p>

            <!-- Answer Input -->
            <input type="text" class="answer-input" placeholder="Type the name here">
        </div>

        <!-- Submit Button -->
        <button type="button" class="submit-btn">Check</button>
        @livewire('checker', ['exercise' => $exercise]);
    </div>
</body>

</html>
