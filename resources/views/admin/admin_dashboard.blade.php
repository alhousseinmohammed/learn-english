<!DOCTYPE html>
<html lang="en">

<head>
    <!-- CSS -->
    {{-- <link href="https://cdn.jsdelivr.net/npm/flatifycss/dist/css/flatify.min.css" rel="stylesheet"
        crossorigin="anonymous" />

    <!-- JavaScript : Popperjs + FlatifyCSS -->
    <script src="https://unpkg.com/@popperjs/core@2" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/flatifycss/dist/js/flatify.min.js" crossorigin="anonymous"></script> --}}
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



    {{-- for curriculum --}}


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
            /* max-width: 800px; */
            margin: 40px auto;
            padding: 20px;
            background-color: #ffffff;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            width: 100%;
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
        .curriculum a,
        .curriculum input[type="submit"],
        .btn-danger {
            display: inline-block;
            margin-bottom: 15px;
            padding: 10px 20px;
            background-color: #3498db;
            color: white;
            text-decoration: none;
            border-radius: 5px;
            font-size: 14px;
            transition: background-color 0.3s;
            cursor: pointer;
        }

        .curriculum a:hover,
        .curriculum input[type="submit"]:hover {
            background-color: #2980b9;
        }

        .curriculum input[type="submit"],
        .btn-danger {
            background-color: rgb(246, 73, 73);
        }

        .curriculum input[type="submit"]:hover {
            background-color: rgb(209, 60, 60);

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
            padding: 8px;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;
        }

        .curriculum input:not([type="submit"]) {
            width: 100%;
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

<body>
    <div class="container">
        @livewire('admin-sidebar')
        @livewire('lessons')
    </div>

    <!-- End of ... -->
    <script src="https://unpkg.com/boxicons@2.1.2/dist/boxicons.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/3.8.0/chart.min.js"
        integrity="sha512-sW/w8s4RWTdFFSduOTGtk4isV1+190E/GghVffMA9XczdJ2MDzSzLEubKAs5h0wzgSJOQTRYyaz73L3d6RtJSg=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    {{-- <script src="{{ url('admin/main.js') }}"></script> --}}
    <script>
        // Statistics Chart

        const ctx = document.getElementById("myChart").getContext("2d");
        const myChart = new Chart(ctx, {
            type: "line",
            data: {
                labels: [
                    "Monday",
                    "Tuesday",
                    "Wednessday",
                    "Thursday",
                    "Friday",
                    "Saturday",
                    "Sunday",
                ],
                datasets: [{
                        label: "Previous Week",
                        data: [283, 374, 80, 1025, 765, 193, 940],
                        borderColor: "#afafaf",
                        borderWidth: 2,
                    },

                    {
                        label: "This Week",
                        // data: [483, 174, 780, 925, 865, 593, 640],
                        data: [
                            @foreach ($week as $day)
                                {{ $progress->where('date', $day)->first()?->count() * 100 }},
                            @endforeach
                        ],
                        borderColor: "#1CB0F6",
                        borderWidth: 2,
                    },
                ],
            },
            options: {
                scales: {
                    y: {
                        beginAtZero: true,
                    },
                },
            },
        });

        // Show Sidebar

        const sideMenu = document.querySelector("aside");
        const menuBtn = document.querySelector("#menu-btn");
        const closeBtn = document.querySelector("#close-btn");
        const themeToggler = document.querySelector(".toggler");

        menuBtn.addEventListener("click", () => {
            sideMenu.style.display = "block";
        });

        closeBtn.addEventListener("click", () => {
            sideMenu.style.display = "none";
        });

        //  Theme Toggler

        themeToggler.addEventListener("click", () => {
            document.body.classList.toggle("dark-theme-variables");

            themeToggler.querySelector("span:nth-child(1)").classList.toggle("selected");
            themeToggler.querySelector("span:nth-child(2)").classList.toggle("selected");
        });
    </script>
    @livewireScripts()
</body>

</html>
