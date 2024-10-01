<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Duolingo exercise</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Fredoka:wght@300;400;500;600;700&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="style.css">
    <script defer src="exercises.js"></script>
    <script defer src="script.js"></script>
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
</head>

<body>
    <script>
        const exercises = [{
                english: "I eat an apple",
                spanish: "Yo como una manzana",
                list: ["manazana", "comes", "Yo", "una", "como", "naranja"],
            },
            {
                english: "This is my wife",
                spanish: "Este es mi esposa",
                list: ["Este", "esta", "esposa", "es", "mi", "hermana"],
            },
            {
                english: "My favorite sport is hockey",
                spanish: "Mi deporte favorito es hockey",
                list: ["deporte", "favorito", "hockey", "Mi", "es", "Tu"],
            },
        ];
    </script>
    <script>
        //DECLARE HTML CLASS, ID, TAG VARIABLES
        const destinationContainer = document.getElementById("destination__container");
        const originContainer = document.getElementById("origin__container");
        const originalText = document.getElementById("original__text");
        const words = document.getElementsByClassName("word");

        let destinationPosDefault = destinationContainer.getBoundingClientRect();

        //DECLARE CODE VARIABLES
        //store coordinates of the words by order of their placement.
        let destinationArray = [];

        //store coordinates of the words in the origin array
        const originArray = [];

        //Pick a random exercise from the list
        let exercise = exercises[Math.floor(Math.random() * exercises.length)];
        let englishSentence = exercise.english.split(" ");
        let listOfWords = exercise.list;

        //Print the sentence in the speech bubble
        for (let i = 0; i < englishSentence.length; i++) {
            const spanNode = document.createElement("span");
            spanNode.textContent = englishSentence[i];
            originalText.appendChild(spanNode);
        }

        //Print the list of words
        for (let i = 0; i < listOfWords.length; i++) {
            const wordNode = document.createElement("div");
            wordNode.textContent = listOfWords[i];
            wordNode.classList.add("word");
            originContainer.appendChild(wordNode);
        }

        function calibrateDestinationCursorPos(destinationArray) {
            //When no word is clicked on
            if (destinationArray.length === 0) {
                return destinationPosDefault.x;
            } else {
                //if word is placed in the destination, fetch coordinates of last word
                //as starting point for the next word.
                let sum = destinationPosDefault.x;
                destinationArray.forEach((element) => {
                    sum += element.width + 20; //add 20px for the spacing
                });
                return sum;
            }
        }

        function createOriginArray(word) {
            let wordPosition = word.getBoundingClientRect();
            let newWordObject = Object.assign(wordPosition);
            newWordObject.word = word.textContent;
            newWordObject.location = "origin";
            originArray.push(newWordObject);
        }

        for (let i = 0; i < words.length; i++) {
            createOriginArray(words[i]);

            words[i].addEventListener("click", () => {
                //Check de destinationStartPos
                destinationStartPos = calibrateDestinationCursorPos(destinationArray);

                //Calculate X and Y distance between destination and the word
                let yTravel =
                    originArray[i].y -
                    (destinationPosDefault.y +
                        (destinationPosDefault.height - originArray[i].height) / 2);

                let xTravel = 0;
                if (originArray[i].x > destinationStartPos) {
                    xTravel = -(originArray[i].x - destinationStartPos);
                } else {
                    xTravel = destinationStartPos - originArray[i].x;
                }

                if (originArray[i].location === "origin") {
                    originArray[i].location = "destination";
                    //Put the word object in the destination array
                    destinationArray.push(originArray[i]);
                } else if (originArray[i].location === "destination") {
                    yTravel = 0;
                    xTravel = 0;
                    originArray[i].location = "origin";
                    //delete the word from the destination Array
                    let test = destinationArray.filter(
                        (wordObject) => wordObject.word !== originArray[i].word
                    );
                    destinationArray = test;
                }

                //Apply translate
                words[i].style.transform = `translate(${xTravel}px,-${yTravel}px)`;
            });
        }
    </script>

    <div class="wrapper">
        <h1>Write this in Spanish</h1>
        <div class="top__container">
            <div class="image_text__container">
                <img src="assets/duo.svg" alt="duo">
                <p id="original__text"></p>
            </div>
            <div id="destination__container">
            </div>
        </div>
        <div id="origin__container">
        </div>
    </div>
    <footer>
        <div class="skip_button">SKIP</div>
        <div class="check_button">CHECK</div>
    </footer>
</body>

</html>
