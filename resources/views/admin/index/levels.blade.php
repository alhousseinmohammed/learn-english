<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Duolingo</title>

    <!--  Material Icons -->
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Sharp:opsz,wght,FILL,GRAD@48,400,0,0" />

    <!-- Stylesheets -->
    <link rel="stylesheet" href="{{ url('admin/css/style.css') }}" />

    <link rel="icon" href="{{ url('duolingo-clone-master/assets/images/favicon.ico') }}">
    <link rel="stylesheet" href="{{ url('duolingo-clone-master/css/learn.css') }}">
    <link rel="stylesheet" href="{{ url('duolingo-clone-master/css/main.css') }}">
    <link rel="stylesheet" href="{{ url('duolingo-clone-master/css/leaderboard.css') }}">

    <link rel="icon" href="{{ url('duolingo-clone-master/assets/images/favicon.ico') }}" />
    <link rel="stylesheet" href="{{ url('duolingo-clone-master/css/profile-page.css') }}" />
    <link rel="stylesheet" href="{{ url('duolingo-clone-master/css/main.css') }}" />
    <link rel="stylesheet" href="{{ url('duolingo-clone-master/css/learn.css') }}" />

    <style>
        /* General Page Styles */
        .curriculum body {
            font-family: 'Arial', sans-serif;
            background-color: #f4f6f9;
            margin: 0;
            padding: 20px;
        }

        /* Container Styles */
        .curriculum div,
        div.curriculum {
            max-width: 800px;
            margin: 40px auto;
            padding: 20px;
            background-color: #ffffff;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

        .curriculum span {
            max-width: 800px;
            margin: 4px auto;
            padding: 2px;
            background-color: #ffffff;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            display: grid;
            grid-template-areas: '. .' '. .';
        }

        /* Header */
        .curriculum h1 {
            text-align: center;
            color: #2c3e50;
            font-weight: 600;
            margin-bottom: 20px;
        }

        /* Add Themes Button */
        .curriculum a {
            display: inline-block;
            margin-bottom: 15px;
            padding: 10px 20px;
            background-color: #3498db;
            color: white;
            text-decoration: none;
            border-radius: 5px;
            font-size: 14px;
            transition: background-color 0.3s;
        }

        .curriculum a:hover {
            background-color: #2980b9;
        }

        /* Table Styles */
        .curriculum table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 10px;
        }

        .curriculum thead tr {
            background-color: #34495e;
            color: white;
            text-align: left;
        }

        .curriculum th,
        .curriculum td {
            padding: 12px 15px;
            border: 1px solid #ddd;
            max-width: 10px;
        }

        .curriculum tbody tr:nth-child(even) {
            background-color: #f2f2f2;
        }

        .curriculum tr:hover {
            background-color: #e8f6ff;
        }

        /* Inline Editing Paragraph */
        .curriculum p {
            margin: 0;
            cursor: pointer;
            padding: 8px;
        }

        /* Input Field Styles */
        .curriculum input {
            width: 100%;
            padding: 8px;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;
        }

        /* Button Styles */
        .curriculum button {
            padding: 8px 12px;
            background-color: #e74c3c;
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            font-size: 14px;
            transition: background-color 0.3s;
        }

        .curriculum :hover {
            /* background-color: #c0392b; */
        }

        /* Form Inline Style */
        .curriculum form {
            display: inline-block;
        }

        .options {
            display: grid;
            flex-direction: row;
            grid-template-columns: auto auto;
            grid-template-rows: auto auto;
        }
    </style>



    <style>
        /* .curriculum body {
            display: flex;
            flex-direction: row;
            gap: 4vh;
        }

        .curriculum .screen {
            display: inline-flex;
            border: solid 1 black;
            min-width: 3vw;
            min-height: 10vh;
        } */
    </style>
    @livewireStyles()
</head>

<body class="container">

    <aside class="nav-bar">
        <div class="nav-top">
            <div class="nav-logo">
                <img src="/assets/logo.svg" />
                <h2>
                    <img class="heading-text" src="/assets/duolingo-plus.svg" />
                </h2>
            </div>
            <div class="close" id="close-btn">
                <span class="material-symbols-sharp"> close </span>
            </div>
        </div>

        <div class="side-bar">
            <a href="#" class="nav-link">
                <span class="material-symbols-sharp"> dashboard </span>
                <h3 class="nav-title">Dashboard</h3>
            </a>

            <a href="#" class="nav-link">
                <span class="material-symbols-sharp"> monitoring</span>
                <h3 class="nav-title">Statistics</h3>
            </a>

            <a href="#" class="nav-link">
                <span class="material-symbols-sharp"> replay_circle_filled </span>
                <h3 class="nav-title">Recent updates</h3>
            </a>

            <a href="#" class="nav-link">
                <span class="material-symbols-sharp"> groups </span>
                <h3 class="nav-title">Social media</h3>
            </a>

            <a href="#" class="nav-link">
                <span class="material-symbols-sharp"> settings</span>
                <h3 class="nav-title">Settings</h3>
            </a>

            <a href="#" class="nav-link">
                <span class="material-symbols-sharp"> logout </span>
                <h3 class="nav-title">Log out</h3>
            </a>
        </div>
    </aside>
    <div class="">
        @livewire('exercises')
        @livewire('screen')
    </div>
    @livewireScripts()
</body>

</html>
