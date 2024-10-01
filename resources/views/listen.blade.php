<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Listen and Write Exercise</title>
    <link rel="stylesheet" href="styles.css">
    <style>
        body,
        html {
            margin: 0;
            padding: 0;
            font-family: 'Arial', sans-serif;
            background-color: #f7f9fc;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        .exercise-wrapper {
            width: 100%;
            max-width: 400px;
            margin: auto;
        }

        .progress-bar {
            height: 5px;
            background-color: #e0e0e0;
            border-radius: 3px;
            margin-bottom: 20px;
            overflow: hidden;
        }

        .progress {
            height: 100%;
            width: 50%;
            /* This value can change based on the user's progress */
            background-color: #4caf50;
        }

        .exercise-container {
            background-color: white;
            border-radius: 15px;
            padding: 30px;
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.1);
            text-align: center;
        }

        .instruction h2 {
            font-size: 24px;
            color: #333;
            margin-bottom: 20px;
        }

        .audio-section {
            margin-bottom: 20px;
        }

        .play-button {
            font-size: 36px;
            padding: 15px;
            background-color: #4caf50;
            color: white;
            border: none;
            border-radius: 50%;
            cursor: pointer;
            transition: background-color 0.3s;
        }

        .play-button:hover {
            background-color: #45a049;
        }

        .input-section {
            margin-bottom: 20px;
        }

        textarea {
            width: 100%;
            padding: 10px;
            font-size: 18px;
            border: 2px solid #ddd;
            border-radius: 5px;
            transition: border-color 0.3s;
            resize: none;
        }

        textarea:focus {
            border-color: #4caf50;
            outline: none;
        }

        .submit-section {
            margin-top: 20px;
        }

        .submit-button {
            font-size: 18px;
            padding: 10px 40px;
            background-color: #4caf50;
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            transition: background-color 0.3s;
        }

        .submit-button:hover {
            background-color: #45a049;
        }
    </style>
</head>

<body>
    <div class="exercise-wrapper">
        <div class="progress-bar">
            <div class="progress"></div>
        </div>
        <div class="exercise-container">
            <div class="instruction">
                <h2>Type what you hear</h2>
            </div>
            <div class="audio-section">
                <audio id="audioPlayer">
                    <source src="{{ asset('audios/' . $exercise->image) }}" type="audio/mpeg">
                    Your browser does not support the audio element.
                </audio>
                <button class="play-button" onclick="togglePlay()">🔊</button>
            </div>
            <div class="input-section">
                <textarea placeholder="Type what you hear..." rows="3"></textarea>
            </div>
            <div class="submit-section">
                <button class="submit-button">Check</button>
            </div>
        </div>
    </div>

    <script>
        function togglePlay() {
            const audio = document.getElementById('audioPlayer');
            if (audio.paused) {
                audio.play();
            } else {
                audio.pause();
            }
        }
    </script>
</body>

</html>
