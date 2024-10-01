<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Language Learning Roadmap</title>
    <link rel="stylesheet" href="styles.css">
    <style>
        /* Basic resets */
        body,
        html {
            margin: 0;
            padding: 0;
            font-family: 'Arial', sans-serif;
            background-color: #f6f7fb;
        }

        .roadmap-container {
            display: flex;
            flex-direction: column;
            align-items: center;
            padding: 50px;
            max-width: 800px;
            margin: auto;
        }

        .level {
            display: flex;
            align-items: center;
            margin-bottom: 50px;
        }

        .node,
        .checkpoint {
            width: 100px;
            height: 100px;
            border-radius: 50%;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            text-align: center;
            background: linear-gradient(145deg, #e6e6e6, #ffffff);
            box-shadow: 8px 8px 16px #d1d1d1, -8px -8px 16px #ffffff;
            transition: all 0.3s ease-in-out;
        }

        .node .icon,
        .checkpoint .icon {
            font-size: 24px;
            margin-bottom: 5px;
        }

        .node .label,
        .checkpoint .label {
            font-size: 14px;
            font-weight: bold;
        }

        .node.completed,
        .checkpoint.completed {
            background: linear-gradient(145deg, #4caf50, #58cc02);
            color: white;
        }

        .node.locked,
        .checkpoint.locked {
            background: linear-gradient(145deg, #d4d4d4, #e9e9e9);
            color: #a0a0a0;
        }

        .node:hover,
        .checkpoint:hover {
            transform: scale(1.1);
            box-shadow: 4px 4px 8px #bbbbbb, -4px -4px 8px #ffffff;
        }

        .path {
            width: 80px;
            height: 4px;
            background-color: #e0e0e0;
            transition: background-color 0.3s ease;
        }

        .path.completed {
            background-color: #4caf50;
        }
    </style>

    <style>
        .circle {
            align-items: flex-start;
            appearance: button;
            background-attachment: scroll;
            background-clip: border-box;
            background-color: rgba(0, 0, 0, 0);
            background-image: none;
            background-origin: padding-box;
            background-position-x: 0%;
            background-position-y: 0%;
            background-repeat: repeat;
            background-size: auto;
            border-bottom-color: rgb(0, 0, 0);
            border-bottom-style: none;
            border-bottom-width: 0px;
            border-image-outset: 0;
            border-image-repeat: stretch;
            border-image-slice: 100%;
            border-image-source: none;
            border-image-width: 1;
            border-left-color: rgb(0, 0, 0);
            border-left-style: none;
            border-left-width: 0px;
            border-right-color: rgb(0, 0, 0);
            border-right-style: none;
            border-right-width: 0px;
            border-top-color: rgb(0, 0, 0);
            border-top-style: none;
            border-top-width: 0px;
            box-sizing: border-box;
            color: rgb(0, 0, 0);
            cursor: pointer;
            display: flex;
            filter: none;
            font-family: 'din-round', sans-serif;
            font-feature-settings: normal;
            font-kerning: auto;
            font-optical-sizing: auto;
            font-size: 17px;
            font-size-adjust: none;
            font-stretch: 100%;
            font-style: normal;
            font-variant-alternates: normal;
            font-variant-caps: normal;
            font-variant-east-asian: normal;
            font-variant-ligatures: normal;
            font-variant-numeric: normal;
            font-variant-position: normal;
            font-variation-settings: normal;
            font-weight: 400;
            height: 65px;
            letter-spacing: normal;
            line-height: 19.55px;
            margin-bottom: 0px;
            margin-left: 0px;
            margin-right: 0px;
            margin-top: 0px;
            outline-color: rgb(0, 0, 0);
            outline-style: none;
            outline-width: 0px;
            overflow-x: visible;
            overflow-y: visible;
            padding-block-end: 0px;
            padding-block-start: 0px;
            padding-bottom: 0px;
            padding-inline-end: 0px;
            padding-inline-start: 0px;
            padding-left: 0px;
            padding-right: 0px;
            padding-top: 0px;
            position: relative;
            text-align: center;
            text-indent: 0px;
            text-rendering: auto;
            text-shadow: none;
            text-size-adjust: 100%;
            text-transform: none;
            touch-action: manipulation;
            transform: matrix(1, 0, 0, 1, 0, 1.5);
            transition-behavior: normal;
            transition-delay: 0s;
            transition-duration: 0.2s;
            transition-property: filter;
            transition-timing-function: ease;
            user-select: none;
            width: 70px;
            word-spacing: 0px;
            z-index: 0;
            -webkit-font-smoothing: antialiased;
            -webkit-tap-highlight-color: rgba(0, 0, 0, 0);
            -webkit-border-image: none;
        }

        .sub-circle {
            box-sizing: border-box;
            color: rgb(114, 214, 39);
            cursor: pointer;
            display: inline;
            fill: none;
            font-family: 'din-round', sans-serif;
            font-feature-settings: normal;
            font-kerning: auto;
            font-optical-sizing: auto;
            font-size: 17px;
            font-size-adjust: none;
            font-stretch: 100%;
            font-style: normal;
            font-variant-alternates: normal;
            font-variant-caps: normal;
            font-variant-east-asian: normal;
            font-variant-ligatures: normal;
            font-variant-numeric: normal;
            font-variant-position: normal;
            font-variation-settings: normal;
            font-weight: 400;
            height: 46px;
            letter-spacing: normal;
            line-height: 19.55px;
            outline-color: rgb(114, 214, 39);
            outline-style: none;
            outline-width: 0px;
            overflow-clip-margin: content-box;
            overflow-x: hidden;
            overflow-y: hidden;
            text-align: center;
            text-indent: 0px;
            text-rendering: auto;
            text-shadow: none;
            text-size-adjust: 100%;
            text-transform: none;
            user-select: auto;
            width: 56px;
            word-spacing: 0px;
            -webkit-font-smoothing: antialiased;
            -webkit-tap-highlight-color: rgba(0, 0, 0, 0);
        }

        .span {
            box-sizing: border-box;
            color: rgb(114, 214, 39);
            cursor: pointer;
            display: inline;
            fill: none;
            font-family: 'din-round', sans-serif;
            font-feature-settings: normal;
            font-kerning: auto;
            font-optical-sizing: auto;
            font-size: 17px;
            font-size-adjust: none;
            font-stretch: 100%;
            font-style: normal;
            font-variant-alternates: normal;
            font-variant-caps: normal;
            font-variant-east-asian: normal;
            font-variant-ligatures: normal;
            font-variant-numeric: normal;
            font-variant-position: normal;
            font-variation-settings: normal;
            font-weight: 400;
            height: 46px;
            letter-spacing: normal;
            line-height: 19.55px;
            outline-color: rgb(114, 214, 39);
            outline-style: none;
            outline-width: 0px;
            overflow-clip-margin: content-box;
            overflow-x: hidden;
            overflow-y: hidden;
            text-align: center;
            text-indent: 0px;
            text-rendering: auto;
            text-shadow: none;
            text-size-adjust: 100%;
            text-transform: none;
            user-select: auto;
            width: 56px;
            word-spacing: 0px;
            -webkit-font-smoothing: antialiased;
            -webkit-tap-highlight-color: rgba(0, 0, 0, 0);
        }

        .left {
            box-sizing: border-box;
            color: rgb(114, 214, 39);
            cursor: pointer;
            display: inline;
            fill: rgb(114, 214, 39);
            font-family: 'din-round', sans-serif;
            font-feature-settings: normal;
            font-kerning: auto;
            font-optical-sizing: auto;
            font-size: 17px;
            font-size-adjust: none;
            font-stretch: 100%;
            font-style: normal;
            font-variant-alternates: normal;
            font-variant-caps: normal;
            font-variant-east-asian: normal;
            font-variant-ligatures: normal;
            font-variant-numeric: normal;
            font-variant-position: normal;
            font-variation-settings: normal;
            font-weight: 400;
            height: auto;
            letter-spacing: normal;
            line-height: 19.55px;
            outline-color: rgb(114, 214, 39);
            outline-style: none;
            outline-width: 0px;
            text-align: center;
            text-indent: 0px;
            text-rendering: auto;
            text-shadow: none;
            text-size-adjust: 100%;
            text-transform: none;
            transform-origin: 0px 0px;
            user-select: auto;
            width: auto;
            word-spacing: 0px;
            -webkit-font-smoothing: antialiased;
            -webkit-tap-highlight-color: rgba(0, 0, 0, 0);
        }

        /* SVG specific styles */
        svg {
            fill: rgb(114, 214, 39);
            /* For filling SVG elements */
        }

        /* If you're specifically styling SVG path elements */
        svg path {
            d: path("M 34.2346 3.25135 C 35.3157 2.1269 34.7053 0.276787 33.1512 0.143156 C 32.0512 0.0485729 30.9331 0 29.8002 0 C 13.342 0 0 10.2517 0 22.8979 C 0 26.3985 1.02236 29.7157 2.85016 32.6827 C 3.47761 33.7012 4.88715 33.7751 5.71626 32.9128 L 34.2346 3.25135 Z");
        }
    </style>

</head>

<body>
    <div class="roadmap-container">
        <!-- Level 1 -->
        <div class="level">
            <div class="node completed" data-level="1" data-theme="Greetings">
                <span class="icon">👋</span>
                <span class="label">Greetings</span>
            </div>
            <div class="path completed"></div>
            <div class="node completed" data-level="1" data-theme="Basics 1">
                <span class="icon">📚</span>
                <span class="label">Basics 1</span>
            </div>
            <div class="path completed"></div>
            <div class="checkpoint completed" data-level="1">
                <span class="icon">🏁</span>
                <span class="label">Checkpoint 1</span>
            </div>
        </div>

        <!-- Level 2 -->
        <div class="level">
            <div class="node" data-level="2" data-theme="Food">
                <span class="icon">🍎</span>
                <span class="label">Food</span>
            </div>
            <div class="path"></div>
            <div class="node locked" data-level="2" data-theme="Travel">
                <span class="icon">✈️</span>
                <span class="label">Travel</span>
            </div>
            <div class="path"></div>
            <div class="checkpoint locked" data-level="2">
                <span class="icon">🔒</span>
                <span class="label">Checkpoint 2</span>
            </div>
        </div>
    </div>



    <script src="script.js"></script>
    <button style="" class="_3vGNs _2YF0P _1333i _22TV_ _3Jm09 cirlce"
        data-test="skill-path-level-0 skill-path-level-skill" aria-label="Lesson"><span
            class="_197Xn nboUl _1IwKR span sub-circle"><svg class="svg" width="56" height="46"
                viewBox="0 0 56 46" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path class="left"
                    d="M34.2346 3.25135C35.3157 2.1269 34.7053 0.276787 33.1512 0.143156C32.0512 0.0485729 30.9331 0 29.8002 0C13.342 0 0 10.2517 0 22.8979C0 26.3985 1.02236 29.7157 2.85016 32.6827C3.47761 33.7012 4.88715 33.7751 5.71626 32.9128L34.2346 3.25135Z"
                    fill="currentColor"></path>
                <path
                    d="M55.0954 12.5231C53.3548 9.61289 49.8186 6.8733 47.2219 5.21074C46.2417 4.58319 44.9772 4.77038 44.1616 5.60066C34.5035 15.4328 18.3374 31.8498 12.05 38.0427C10.9724 39.1041 10.996 40.8688 12.249 41.716C16.2271 44.4058 20.9121 45.5851 23.4852 45.9072C24.1853 45.9949 24.8657 45.7259 25.3691 45.2315C34.775 35.9934 50.2041 19.9015 54.7166 15.0879C55.3787 14.3818 55.5923 13.3539 55.0954 12.5231Z"
                    fill="currentColor"></path>
            </svg></span><img class="_1B6UH" draggable="false"
            src="https://d35aaqx5ub95lt.cloudfront.net/images/path/icons/bfa591f6854b4de08e1656b3e8ca084f.svg"></button>
</body>


</html>
