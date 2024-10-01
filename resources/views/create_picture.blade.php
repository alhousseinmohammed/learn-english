<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create Picture Naming Exercise</title>
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
    <div class="exercise-container">
        <h2>Create a Picture Naming Exercise</h2>

        <form action="{{ action('App\Http\Controllers\ExerciseController@store') }}" method="post"
            enctype="multipart/form-data">
            @csrf
            <!-- Image Upload -->
            <div class="form-group">
                <label for="image">Upload Image:</label>
                <input type="file" name="image" id="image" accept="image/*" required>
            </div>

            <!-- Correct Answer Input -->
            <div class="form-group">
                <label for="answer">Correct Answer:</label>
                <input type="text" name="answer" id="answer" placeholder="Enter the correct name of the image"
                    required>
            </div>
            <input hidden type="text" name="question" value="What does the photo describe">
            <input hidden type="text" name="type" value="picture">
            <input hidden type="text" name="admin_id" value="2">
            <input hidden type="text" name="lesson_id" value="2">
            <!-- Submit Button -->
            <button type="submit" class="submit-btn">Create Exercise</button>
        </form>
    </div>
</body>

</html>
